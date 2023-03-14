<?php
require_once "./components/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Trade</title>
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/mobile.css">
</head>
<body>
<div id="admin">
    <?php include "./components/header.php" ?>
    <?php include "./components/navbar.php" ?>
    <main id="statistick">
        <div class="infotexts">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59.9004 73.3333H73.3337" stroke="black" stroke-width="5" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.66602 6.66666V63.3333C6.66602 68.8667 11.1327 73.3333 16.666 73.3333H46.5993" stroke="black"
                      stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M66.6328 27.2667L69.9995 23.3333" stroke="black" stroke-width="5" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.666 56.6667L31.966 38.8C34.4993 35.8667 38.9993 35.6667 41.7327 38.4333L44.8993 41.6C47.6327 44.3334 52.1327 44.1666 54.666 41.2333L58.4993 36.7333"
                      stroke="black" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <h1>Статистика</h1>
        </div>
        <!--        <div class="chartcontainer">-->
        <!--            <canvas id="Chart"></canvas>-->
        <!--        </div>-->
        <div id="tabs">
            <div class="tabheader">
                <div class="tab whiteborder">Доход</div>
                <div class="tab">Пополнения</div>
                <div class="tab">Выводы</div>
            </div>
            <div class="tabcontent">
                <!--                Доход-->
                <?php $incomes = db_getConnection()->query("SELECT * FROM `transactions` WHERE `type`='income' and `user_id`={$user['id']}")->fetchAll(); ?>
                <div class="tabContent">
                    <div class="column">
                        <p class="columnheader">
                            Дата и время
                        </p>
                        <?php foreach ($incomes as $income): ?>
                            <span><?= $income['date'] ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="column">
                        <p class="columnheader">
                            Сумма
                        </p>
                        <?php foreach ($incomes as $income): ?>
                            <span>$<?= $income['amount'] ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="column">
                        <p class="columnheader">
                            Статус
                        </p>
                        <?php foreach ($incomes as $income): ?>
                            <span>Начислено </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--                Пополнения-->
                <div class="tabContent">
                    <?php $topups = db_getConnection()->query("SELECT * FROM `payments` WHERE `user_id`={$user['id']} order by `id` desc")->fetchAll(); ?>
                    <div class="column">
                        <p class="columnheader">
                            Дата и время
                        </p>
                        <?php foreach ($topups as $topup): ?>
                            <span><?= $topup['date_create'] ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="column">
                        <p class="columnheader">
                            Сумма
                        </p>
                        <?php foreach ($topups as $topup): ?>
                            <span>$<?= $topup['amount'] ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="column">
                        <p class="columnheader">
                            Статус
                        </p>
                        <?php foreach ($topups as $topup): ?>
                            <span><?= $topup['status'] == 'open' ? 'в обработке' : ($topup['status'] === 'canceled' ? 'отменён' : ($topup['status'] === 'done' ? 'Начислено' : '')) ?> </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--                Выводы-->
                <div class="tabContent">

                </div>
            </div>
        </div>
        <!--        <div class="tabspagination">-->
        <!--            <div class="paginaation_block active">1</div>-->
        <!--            <div class="paginaation_block">2</div>-->
        <!--            <div class="paginaation_block">3</div>-->
        <!--            <div class="paginaation_block paginaation_next">-->
        <!--                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                    <path d="M12.9 7.93994L15.52 10.5599C16.29 11.3299 16.29 12.5899 15.52 13.3599L9 19.8699" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                    <path d="M9 4.04004L10.04 5.08004" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                </svg>-->
        <!--            </div>-->
        <!--        </div>-->
    </main>
</div>


<script src="../js/jquery.js"></script>
<script type="module" src="../js/admin.js"></script>
<script src="../js/adminfunctions.js"></script>

<script src="../js/burger.js"></script>
<script src="../js/chart.js"></script>
<script src="../js/chartconfig.js"></script>
<script src="../js/tabs.js"></script>
</body>
</html>
