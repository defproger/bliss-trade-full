<?php
require "db.php";
require_once 'init.php';
header('Content-Type: application/json');

function pay($request)
{
    global $PAYAPI;
    $public = $PAYAPI['publickey'];
    $secret = $PAYAPI['secretkey'];
    $action = 'auth/deposit';
    $nonce = substr((string)time(), 0, 9) . '0000';
    $body = json_encode($request);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.kuna.io/v3/$action");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "accept: application/json",
        "User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3",
        "content-type: application/json",
        "kun-apikey: " . $public,
        "kun-signature: " . hash_hmac("sha384", utf8_encode("/v3/{$action}{$nonce}{$body}"), utf8_encode($secret)),
        "kun-nonce: " . $nonce
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

    $result = curl_exec($ch);
    return json_decode($result);

}

//print_r($_POST);
$amount = is_numeric(@$_POST['amount']) ? htmlspecialchars(@$_POST['amount']) : null;
$type = htmlspecialchars(@$_POST['type']);
$uid = htmlspecialchars(@$_POST['id']);

if ($amount >= 25):
    switch ($type) :
        case 'card':
            $exchange = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5'));

            $link = pay([
                "currency" => "uah",
                "amount" => $amount * floatval($exchange[1]->sale),
                "payment_service" => "default"
            ]);

            $url = $link->flow_data->action;
            $trx_hash = $link->deposit_id;
            break;
        case 'btc':
            $url = 'https://btc.com/';
            $trx_hash = '';
            break;
        case 'trc':
            $url = 'https://trc-20.com/';
            $trx_hash = '';
            break;
    endswitch;

    db_insert('payments', [
        "user_id" => $uid,
        "amount" => $amount,
        "trx_hash" => $trx_hash,
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
