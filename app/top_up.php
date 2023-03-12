<?php
require "db.php";
header('Content-Type: application/json');

//print_r($_POST);
$amount = is_numeric(@$_POST['amount']) ? htmlspecialchars(@$_POST['amount']) : null;
$type = htmlspecialchars(@$_POST['type']);
$uid = htmlspecialchars(@$_POST['id']);

if ($amount >= 12):
    switch ($type) :
        case 'card':
            $url = 'https://visa-mastercard.com/';

            break;
        case 'btc':
            $url = 'https://btc.com/';

            break;
        case 'trc':
            $url = 'https://trc-20.com/';

            break;
    endswitch;

    db_insert('payments', [
        "user_id" => $uid,
        "amount" => $amount,
        "trx_hash" => "???",
        "status" => "open",
        "type_currency" => $type,
        "wallet" => "???",
    ]);

    if (isset($url))
        echo json_encode([
            "success" => true,
            "url" => $url
        ]);
endif;
