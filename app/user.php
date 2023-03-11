<?php
require "db.php";
header('Content-Type: application/json');
//print_r($_POST);

if (isset($_POST['data']['name'])
    && isset($_POST['data']['tel'])
    && isset($_POST['data']['email'])
    && isset($_POST['data']['pass'])) :


    $name = htmlspecialchars($_POST['data']['name']);
    $phone = htmlspecialchars($_POST['data']['tel']);
    $email = htmlspecialchars($_POST['data']['email']);
    $password = cryptpass($_POST['data']['pass']);

    $user = db_getById('users', $email, 'email');

    switch ($_POST['method']):
        case 'reg':
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
    endswitch;


endif;
