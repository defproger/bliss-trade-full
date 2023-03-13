<?php
require_once "../db.php";

$public = $PAYAPI['publickey'];
$secret = $PAYAPI['secretkey'];
$action = 'auth/deposit/details';


$payments = db_getConnection()->query("SELECT * FROM `payments` WHERE `status` = 'open'")->fetchAll();

foreach ($payments as $payment) {
    $nonce = substr((string)time(), 0, 9) . '0000';
    $body = array("id" => $payment['trx_hash']);
    $body = json_encode($body);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.kuna.io/v3/$action");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "accept: application/json",
        "content-type: application/json",
        "User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3",
        "kun-apikey: " . $public,
        "kun-signature: " . hash_hmac("sha384", utf8_encode("/v3/{$action}{$nonce}{$body}"), utf8_encode($secret)),
        "kun-nonce: " . $nonce
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

    $result = curl_exec($ch);
    $result = json_decode($result);


    if ($result->status == 'done') {
        db_update('payments', $payment['id'], [
            'status' => 'done'
        ]);
        db_getConnection()->query("update `users` set `balance`= balance+{$payment['amount']} where `id` = {$payment['user_id']}");
    } else if ($result->status != 'pending') {
        db_update('payments', $payment['id'], [
            'status' => 'canceled'
        ]);
    }

}

