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
        <center style="margin-top: 100px">Сейчас мы работаем над этой страницей</center>
    </main>
<!--    <main id="paylist">-->
<!--        <div class="paymenu">-->
<!--            <div class="infotexts">-->
<!--                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M8.33398 46.9V38.3667C8.33398 31.4667 13.9673 25.8333 20.8673 25.8333H59.134C66.034 25.8333 71.6673 31.4667 71.6673 38.3667V43.1667H64.934C63.0673 43.1667 61.3673 43.8999 60.134 45.1666C58.734 46.5333 57.934 48.5 58.134 50.6C58.434 54.2 61.734 56.8333 65.334 56.8333H71.6673V60.7999C71.6673 67.6999 66.034 73.3333 59.134 73.3333H20.8673C13.9673 73.3333 8.33398 67.6999 8.33398 60.7999"-->
<!--                          stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M40.9336 7.23335C45.0669 5.66668 49.5003 8.73345 49.5003 13.1668V25.8334" stroke="black"-->
<!--                          stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M8.33398 41.3666V26.1334C8.33398 22.1668 10.7673 18.6333 14.4673 17.2333L27.7007 12.2333"-->
<!--                          stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M75.2006 46.5665V53.4334C75.2006 55.2667 73.7339 56.7666 71.8673 56.8333H65.3339C61.7339 56.8333 58.4339 54.2 58.1339 50.6C57.9339 48.5 58.7339 46.5333 60.1339 45.1666C61.3673 43.8999 63.0673 43.1667 64.9339 43.1667H71.8673C73.7339 43.2334 75.2006 44.7332 75.2006 46.5665Z"-->
<!--                          stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M23.334 40H46.6673" stroke="black" stroke-width="5" stroke-linecap="round"-->
<!--                          stroke-linejoin="round"/>-->
<!--                </svg>-->
<!--                <h1>Выписка</h1>-->
<!--            </div>-->
<!--            <div class="buttons">-->
<!--                <button class="active">-->
<!--                    Средства на счету-->
<!--                </button>-->
<!--                <button>Средства в обработке</button>-->
<!--                <button>Средства на вывод</button>-->
<!--                <button>Пополнения</button>-->
<!--                <button>Выводы</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="payinfo">-->
<!--            <a class="gobackbutton" href="./paylist.php">-->
<!--                <svg width="46" height="18" viewBox="0 0 46 18" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M29.875 10.5525V8.63251C29.875 7.08001 31.1425 5.8125 32.695 5.8125H41.305C42.8575 5.8125 44.125 7.08001 44.125 8.63251V9.71251H42.61C42.19 9.71251 41.8075 9.87749 41.53 10.1625C41.215 10.47 41.035 10.9125 41.08 11.385C41.1475 12.195 41.89 12.7875 42.7 12.7875H44.125V13.68C44.125 15.2325 42.8575 16.5 41.305 16.5H32.695C31.1425 16.5 29.875 15.2325 29.875 13.68"-->
<!--                          stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M37.2109 1.62748C38.1409 1.27498 39.1384 1.96501 39.1384 2.96251V5.8125" stroke="black"-->
<!--                          stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M29.875 9.3075V5.88004C29.875 4.98754 30.4225 4.1925 31.255 3.8775L34.2325 2.7525"-->
<!--                          stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M44.9191 10.4775V12.0225C44.9191 12.435 44.5891 12.7725 44.1691 12.7875H42.6991C41.8891 12.7875 41.1466 12.195 41.0791 11.385C41.0341 10.9125 41.2141 10.47 41.5291 10.1625C41.8066 9.87751 42.1891 9.71252 42.6091 9.71252H44.1691C44.5891 9.72752 44.9191 10.065 44.9191 10.4775Z"-->
<!--                          stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    <path d="M33.25 9H38.5" stroke="black" stroke-width="1.3" stroke-linecap="round"-->
<!--                          stroke-linejoin="round"/>-->
<!--                    <path d="M8.325 12.045L6.36 10.08C5.7825 9.50248 5.7825 8.55748 6.36 7.97998L11.25 3.09748"-->
<!--                          stroke="black" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round"-->
<!--                          stroke-linejoin="round"/>-->
<!--                    <path d="M11.25 14.97L10.47 14.19" stroke="black" stroke-width="1.3" stroke-miterlimit="10"-->
<!--                          stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                </svg>-->
<!--                <span>Выписка</span>-->
<!--            </a>-->
<!--            <div class="trade_block_flex">-->
<!--                <div class="ylwbg">-->
<!--                    <svg width="82" height="159" viewBox="0 0 82 159" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                              d="M1.19195 0L57.3619 35.4421H106.638L162.808 0L163.227 0.652529L164 0.757157L157.376 48.8663L156.273 82.7472L155.493 82.7223L156.193 83.0641L139.063 117.533L138.363 117.191L138.936 117.716L105.783 153.279L105.21 152.755L105.456 153.488L88.8775 158.96L88.631 158.226V159H75.369L75.369 158.227L75.1225 158.96L58.5453 153.488L58.7918 152.755L58.2188 153.279L25.0654 117.716L25.6384 117.191L24.9385 117.533L7.80747 83.0642L8.50734 82.7223L7.72753 82.7472L6.62682 48.8662L0 0.757198L0.773032 0.652541L1.19195 0ZM4.84524 4.13889L55.8413 36.3164L42.8424 47.704L4.84524 4.13889ZM41.062 48.0278H8.08622L1.90161 3.12907L41.062 48.0278ZM43.6304 49.0781L56.5515 106.116L81.0106 91.1738L56.8551 37.4927L43.6304 49.0781ZM80.7455 93.1528L57.0379 107.636L63.6401 121.233L62.9371 121.568L63.6494 121.253L69.6548 134.576L80.7455 93.1528ZM61.5101 120.413L55.439 107.909L24.8393 92.0165L41.581 115.416L61.5101 120.413ZM39.6724 115.423L21.7958 90.4365L10.2584 84.4956L26.1063 116.383L39.6724 115.423ZM22.954 89.2909L8.51584 49.5748H42.1437L54.8994 105.883L22.954 89.2909ZM8.34393 53.6645L20.9128 88.2386L9.27243 82.2446L8.34393 53.6645ZM42.3556 117.206L62.3791 122.226L68.6396 136.115H49.3917L42.3556 117.206ZM82.0013 89.5784L58.3371 36.9891H105.663L82.0013 89.5784ZM108.159 36.3164L159.155 4.13872L121.159 47.704L108.159 36.3164ZM120.371 49.0781L107.145 37.4927L82.9921 91.1738L107.45 106.116L120.371 49.0781ZM108.562 107.909L102.491 120.413L122.419 115.416L139.162 92.0166L108.562 107.909ZM142.206 90.4365L153.742 84.4957L137.895 116.383L124.328 115.423L142.206 90.4365ZM121.645 117.206L101.622 122.226L95.3605 136.115H114.611L121.645 117.206ZM101.064 121.568L100.361 121.233L106.963 107.636L83.2572 93.1528L94.3453 134.576L100.352 121.253L101.064 121.568ZM109.102 105.883L141.047 89.2909L155.487 49.5748H121.858L109.102 105.883ZM122.939 48.0278H155.916L162.099 3.12896L122.939 48.0278ZM155.658 53.6652L143.089 88.2385L154.728 82.2446L155.658 53.6652ZM53.8093 146.27L35.2706 126.384L48.2489 137.398L53.8093 146.27ZM50.2513 137.662L58.8262 151.344L68.3559 137.662H50.2513ZM76.8759 157.453H87.1245L82.0012 150.264L76.8759 157.453ZM83.0182 149.01L94.0467 138.091L103.977 152.346L88.934 157.311L83.0182 149.01ZM105.175 151.344L95.6442 137.662H113.751L105.175 151.344ZM115.754 137.398L110.194 146.269L128.729 126.386L115.754 137.398ZM82.0013 94.4923L70.8571 136.115H93.1429L82.0013 94.4923ZM40.5818 116.909L27.5892 117.829L47.0788 134.369L40.5818 116.909ZM136.412 117.829L123.418 116.909L116.923 134.369L136.412 117.829ZM69.9534 138.091L60.0244 152.346L75.0661 157.311L80.9844 149.01L69.9534 138.091ZM92.2718 137.662H71.7285L82.0013 147.83L92.2718 137.662Z"-->
<!--                              fill="black"/>-->
<!--                    </svg>-->

<!--                </div>-->

<!--                <p>Средства на счету </p>-->
<!--                <h1 class="balancevalue">0.00 $</h1>-->
<!--            </div>-->
<!--            <div id="tabs">-->
<!--                <div class="tabheader">-->
<!--                    <p class="columnheader">-->
<!--                        Дата-->
<!--                    </p>-->
<!--                    <p class="columnheader">-->
<!--                        Время-->
<!--                    </p>-->
<!--                    <p class="columnheader">-->
<!--                        Сумма-->
<!--                    </p>-->
<!--                    <p class="columnheader">-->
<!--                        Статус-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="tabcontent">-->
<!--                    <div class="tabContent">-->
<!--                        <div class="column">-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                            <span>23.10.2022 </span>-->
<!--                        </div>-->
<!--                        <div class="column">-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                            <span> 01:05 </span>-->
<!--                        </div>-->
<!--                        <div class="column">-->
<!--                            <span> $5.00</span>-->
<!--                            <span> $25.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                            <span> $10.00</span>-->
<!--                        </div>-->
<!--                        <div class="column">-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                            <span>Начислено </span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="tabspagination">-->
<!--                <div class="paginaation_block active">1</div>-->
<!--                <div class="paginaation_block">2</div>-->
<!--                <div class="paginaation_block">3</div>-->
<!--                <div class="paginaation_block paginaation_next">-->
<!--                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path d="M12.9 7.93994L15.52 10.5599C16.29 11.3299 16.29 12.5899 15.52 13.3599L9 19.8699"-->
<!--                              stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"-->
<!--                              stroke-linejoin="round"/>-->
<!--                        <path d="M9 4.04004L10.04 5.08004" stroke="black" stroke-width="1.5" stroke-miterlimit="10"-->
<!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
<!--                    </svg>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </main>-->
</div>
<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

        let buttons = document.querySelector('#paylist .buttons');
        for (const button of buttons.children) {
            button.classList = '';
            button.addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementsByClassName('paymenu')[0].style.display = 'none';
                document.getElementsByClassName('payinfo')[0].style.display = 'block';
            })
        }
    }

</script>
<script src="../js/jquery.js"></script>
<script type="module" src="../js/admin.js"></script>
<script src="../js/adminfunctions.js"></script>

<script src="../js/burger.js"></script>
</body>
</html>
