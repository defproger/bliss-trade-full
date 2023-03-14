<?php
require "db.php";
ini_set('display_errors', 0);
header('Content-Type: application/json');
//print_r($_POST);


$name = htmlspecialchars(@$_POST['data']['name']);
$phone = htmlspecialchars(@$_POST['data']['tel']);
$email = htmlspecialchars(@$_POST['data']['email']);
$password = cryptpass(@$_POST['data']['pass']);

if (isset($_POST['method'])) :
    switch ($_POST['method']):
        case 'reg':
            if (isset($_POST['data']['email'])
                && isset($_POST['data']['pass'])
                && isset($_POST['data']['name'])
                && isset($_POST['data']['tel']))
                $user = db_getById('users', $email, 'email');

            if (isset($user['id'])) {
                echo json_encode([
                    "success" => false,
                    "msg" => "Такой пользователь уже существует"
                ]);
            } else {
                $refid = null;
                if (isset($_POST['ref_id'])) {
                    $referal = db_getById('users', $_POST['ref_id']);
                    if ($referal['ref_limit'] != 0) {
                        $refid = $referal['id'];
                        db_update('users', $referal['id'], [
                            'ref_limit' => $referal['ref_limit'] - 1
                        ]);
                    }
                }
                db_insert('users', [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'pswd' => $password,
                    'balance' => 0,
                    'ref_id' => $refid,
                ]);
                echo json_encode([
                    "success" => true,
                    "msg" => "Вы успешно зарегистрировались"
                ]);
            }

            break;
        case 'log':
            if (isset($_POST['data']['email'])
                && isset($_POST['data']['pass']))
                $user = db_getById('users', $email, 'email');

            if (isset($user['id'])) {
                if ($password === $user['pswd']) {
                    $hash = hash('sha256', $user['id'] . time() . $user['id']);
                    db_update('users', $user['id'], [
                        'hash' => $hash
                    ]);
                    echo json_encode([
                        "success" => true,
                        "hash" => $hash,
                        'id' => $user['id']
                    ]);
                } else {
                    echo json_encode([
                        "success" => false,
                        "msg" => 'Неверный логин или пароль'
                    ]);
                }

            } else {
                echo json_encode([
                    "success" => false,
                    "msg" => 'Неверный логин или пароль'
                ]);
            }
            break;
        case 'auth':
            $user = db_getById('users', $_POST['id']);
            if ($user['hash'] === $_POST['hash']) {
                echo json_encode([
                    "success" => true,
                    "user" => [
                        "balance" => $user['balance'],
                        "name" => $user['name']
                    ]
                ]);
                db_update('users', $user['id'], [
                    'last_visit' => date("Y-m-d H:i:s")
                ]);
            } else
                echo json_encode([
                    "success" => false
                ]);
            break;
        case 'deposit':
            $user = db_getById('users', $_POST['id']);
            $tariff = db_getById('tariff', $_POST['did']);
            if ($user['hash'] === $_POST['hash'])
                if ($user['level'] === $tariff['level'])
                    if ($user['balance'] >= $_POST['amount'] && is_numeric($_POST['amount'])) {
                        $today = new DateTime('now');
                        $workingDaysToAdd = $tariff['period'];
                        $daysAdded = 0;
                        $next = new DateTime('now');
                        while ($daysAdded < $workingDaysToAdd) {
                            $today->add(new DateInterval('P1D'));
                            if ($daysAdded < 1) {
                                $next->add(new DateInterval('P1D'));
                            }
                            $dayOfWeek = $today->format('N');
                            if ($dayOfWeek <= 5) {
                                $daysAdded++;
                            }
                        }
                        $closed = $today->format('Y-m-d H:i:s');
                        db_insert('deposit', [
                            "id_user" => $user['id'],
                            "id_plan" => $tariff['id'],
                            "amount" => $_POST['amount'],
                            "amount_profit" => 0,
                            "date_next" => ($next->format('Y-m-d H:i:s')),
                            "date_closed" => ($closed),
                            "status" => 'new',
                        ]);
                        db_update('users', $user['id'], [
                            'balance' => $user['balance'] - $_POST['amount']
                        ]);
                        db_insert('transactions', [
                            'user_id' => $user['id'],
                            'amount' => $_POST['amount'],
                            'type' => 'deposit'
                        ]);
                        echo json_encode([
                            "success" => true
                        ]);
                    } else
                        echo json_encode([
                            "success" => false,
                            'msg' => "У вас не хватает средств"
                        ]);
                else
                    echo json_encode([
                        "success" => false,
                        'msg' => "Вам недоступен этот тариф"
                    ]);
            else
                echo json_encode([
                    "success" => false,
                    'msg' => "Вы не авторизованны в системе"
                ]);
            break;
        case 'edit':
            $user = db_getById('users', $_POST['id']);
            $update = [];
            if ($user['hash'] === $_POST['hash']) {
                foreach ($_POST['data'] as $column => $data) {
                    if (array_key_exists($column, $user) && $user[$column] !== $data && $column !== "email" && $column !== "id")
                        $update[$column] = $data;
                }
                if (isset($_POST['data']['password']) &&
                    $_POST['data']['password'] != '')
                    if (isset($_POST['data']['passwordrepeat']) &&
                        $_POST['data']['passwordrepeat'] === $_POST['data']['password'])
                        $update['pswd'] = cryptpass($_POST['data']['password']);
                    else {
                        echo json_encode([
                            "success" => false,
                            'msg' => "Пароли не совпадают"
                        ]);
                        exit();
                    }

                if (count($update) > 0) {
                    db_update('users', $user['id'], $update);

                    echo json_encode([
                        "success" => true,
                    ]);
                } else
                    echo json_encode([
                        "success" => true,
                        'msg' => 'Вы ничего не поменяли',
                    ]);
            }

            break;
    endswitch;


endif;
