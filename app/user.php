<?php
require "db.php";
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
                db_insert('users', [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'pswd' => $password,
                    'balance' => 0,
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
            if ($user['hash'] === $_POST['hash'])
                echo json_encode([
                    "success" => true,
                    "user" => [
                        "balance" => $user['balance']
                    ]
                ]);
            else
                echo json_encode([
                    "success" => false
                ]);
            break;
        case 'deposit':
            $user = db_getById('users', $_POST['id']);
            $tariff = db_getById('tariff', $_POST['did']);
            if ($user['hash'] === $_POST['hash'])
                if ($user['level'] === $tariff['level'])
                    if ($user['balance'] > $_POST['amount'] && is_numeric($_POST['amount'])) {
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
                        $closed = $today->format('Y-m-d');
                        db_insert('deposit', [
                            "id_user" => $user['id'],
                            "id_plan" => $tariff['id'],
                            "amount" => $_POST['amount'],
                            "amount_profit" => 0,
                            "date_next" => formDate($next),
                            "date_closed" => formDate($closed),
                            "status" => 'open',
                        ]);
                        db_update('users', $user['id'], [
                            'balance' => $user['balance'] - $_POST['amount']
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
    endswitch;


endif;
