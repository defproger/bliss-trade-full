<?php
require_once "../db.php";
echo "<pre>";

$deposits = db_getConnection()->query("SELECT `deposit`.*, `tariff`.`bid` FROM `deposit`,`tariff` WHERE `status` = 'open' and `deposit`.`id_plan` = `tariff`.`id`")->fetchAll();
foreach ($deposits as $deposit) {
    $today = new DateTime();
    $profit = ($deposit['amount'] / 100) * $deposit['bid'];
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

    }
    if (strtotime($deposit['date_next']) == strtotime($deposit['date_closed'])) {
        db_getConnection()
            ->query("update `deposit` set
                     `amount_profit`= `amount_profit`+{$profit} ,
                     `status` = 'closed'
                     where `id` = {$deposit['id']}");

        db_getConnection()->query("update `users` set `balance`= balance+" . $deposit['amount'] + $deposit['amount_profit'] + $profit . " where `id` = {$deposit['user_id']}");
        $reffer = db_getConnection()->query("select * from `users` where `id` = (select `ref_id` from `users` where `id` = {$deposit['user_id']})")->fetch();
        if (isset($reffer['id']))
            db_getConnection()->query("update `users` set `balance`= balance+" . (($deposit['amount'] + $deposit['amount_profit'] + $profit) / 100) * $reffer['ref_percent'] . " where `id` = {$reffer['id']}");


    }
}



