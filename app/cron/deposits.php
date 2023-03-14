<?php
require_once "../db.php";
echo "<pre>";

$deposits = db_getConnection()->query("SELECT `deposit`.*, `tariff`.`bid`, `tariff`.`type` FROM `deposit`,`tariff` WHERE `status` in ('open', 'new') and `deposit`.`id_plan` = `tariff`.`id`")->fetchAll();
foreach ($deposits as $deposit) {
    $today = new DateTime();
    $profit = ($deposit['amount'] / 100) * $deposit['bid'];
    $statuschanger = '';
    if ($deposit['status'] == 'new') {
        $reffer = db_getConnection()->query("select * from `users` where `id` = (select `ref_id` from `users` where `id` = {$deposit['id_user']})")->fetch();
        if (isset($reffer['id'])){
            db_getConnection()->query("update `users` set `balance`= balance+" . (($deposit['amount']) / 100) * $reffer['ref_percent'] . " where `id` = {$reffer['id']}");
            db_insert('transactions', [
                'user_id' => $reffer['id'],
                'amount' => (($deposit['amount']) / 100) * $reffer['ref_percent'],
                'type' => 'income',
                'subtype' => 'referral'
            ]);
        }
        db_getConnection()
            ->query("update `deposit` set
                     `status` = 'open'
                     where `id` = {$deposit['id']}");
    }
    if ($today->getTimestamp() > strtotime($deposit['date_next']) && strtotime($deposit['date_next']) < strtotime($deposit['date_closed'])) {
        db_getConnection()
            ->query("update `deposit` set
                     `amount_profit`= `amount_profit`+{$profit} ,
                     `date_next` = 
                         CASE 
                            WHEN WEEKDAY(DATE_ADD(`date_next`, INTERVAL 1 DAY)) = 5 
                                OR WEEKDAY(DATE_ADD(`date_next`, INTERVAL 1 DAY)) = 6 
                            THEN DATE_ADD(`date_next`, INTERVAL 3 DAY)
                            ELSE DATE_ADD(`date_next`, INTERVAL 1 DAY) 
                         END
                     where `id` = {$deposit['id']}");
        if ($deposit['type'] == 'daily') {
            db_getConnection()->query("update `users` set `balance`= `balance`+({$profit}) where `id`={$deposit['id_user']}");
            db_insert('transactions', [
                'user_id' => $deposit['id_user'],
                'amount' => $profit,
                'type' => 'income',
                'subtype' => 'deposit_early'
            ]);
        }
    }
    if (strtotime($deposit['date_next']) == strtotime($deposit['date_closed'])) {
        db_getConnection()
            ->query("update `deposit` set
                     `amount_profit`= `amount_profit`+{$profit} ,
                     `status` = 'closed'
                     where `id` = {$deposit['id']}");


        $depositclosepay = $deposit['type'] == 'daily' ? $deposit['amount'] : ($deposit['amount'] + $deposit['amount_profit'] + $profit);

        db_getConnection()->query("update `users` set `balance`= `balance`+({$depositclosepay}) where `id`={$deposit['id_user']}");
        db_insert('transactions', [
            'user_id' => $deposit['id_user'],
            'amount' => $depositclosepay,
            'type' => 'income',
            'subtype' => 'deposit'
        ]);
    }
}



