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
    <main id="top_up" class="moneyoperations">

        <div class="trade_block_flex">
            <div class="ylwbg">
                <svg width="82" height="159" viewBox="0 0 82 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M1.19195 0L57.3619 35.4421H106.638L162.808 0L163.227 0.652529L164 0.757157L157.376 48.8663L156.273 82.7472L155.493 82.7223L156.193 83.0641L139.063 117.533L138.363 117.191L138.936 117.716L105.783 153.279L105.21 152.755L105.456 153.488L88.8775 158.96L88.631 158.226V159H75.369L75.369 158.227L75.1225 158.96L58.5453 153.488L58.7918 152.755L58.2188 153.279L25.0654 117.716L25.6384 117.191L24.9385 117.533L7.80747 83.0642L8.50734 82.7223L7.72753 82.7472L6.62682 48.8662L0 0.757198L0.773032 0.652541L1.19195 0ZM4.84524 4.13889L55.8413 36.3164L42.8424 47.704L4.84524 4.13889ZM41.062 48.0278H8.08622L1.90161 3.12907L41.062 48.0278ZM43.6304 49.0781L56.5515 106.116L81.0106 91.1738L56.8551 37.4927L43.6304 49.0781ZM80.7455 93.1528L57.0379 107.636L63.6401 121.233L62.9371 121.568L63.6494 121.253L69.6548 134.576L80.7455 93.1528ZM61.5101 120.413L55.439 107.909L24.8393 92.0165L41.581 115.416L61.5101 120.413ZM39.6724 115.423L21.7958 90.4365L10.2584 84.4956L26.1063 116.383L39.6724 115.423ZM22.954 89.2909L8.51584 49.5748H42.1437L54.8994 105.883L22.954 89.2909ZM8.34393 53.6645L20.9128 88.2386L9.27243 82.2446L8.34393 53.6645ZM42.3556 117.206L62.3791 122.226L68.6396 136.115H49.3917L42.3556 117.206ZM82.0013 89.5784L58.3371 36.9891H105.663L82.0013 89.5784ZM108.159 36.3164L159.155 4.13872L121.159 47.704L108.159 36.3164ZM120.371 49.0781L107.145 37.4927L82.9921 91.1738L107.45 106.116L120.371 49.0781ZM108.562 107.909L102.491 120.413L122.419 115.416L139.162 92.0166L108.562 107.909ZM142.206 90.4365L153.742 84.4957L137.895 116.383L124.328 115.423L142.206 90.4365ZM121.645 117.206L101.622 122.226L95.3605 136.115H114.611L121.645 117.206ZM101.064 121.568L100.361 121.233L106.963 107.636L83.2572 93.1528L94.3453 134.576L100.352 121.253L101.064 121.568ZM109.102 105.883L141.047 89.2909L155.487 49.5748H121.858L109.102 105.883ZM122.939 48.0278H155.916L162.099 3.12896L122.939 48.0278ZM155.658 53.6652L143.089 88.2385L154.728 82.2446L155.658 53.6652ZM53.8093 146.27L35.2706 126.384L48.2489 137.398L53.8093 146.27ZM50.2513 137.662L58.8262 151.344L68.3559 137.662H50.2513ZM76.8759 157.453H87.1245L82.0012 150.264L76.8759 157.453ZM83.0182 149.01L94.0467 138.091L103.977 152.346L88.934 157.311L83.0182 149.01ZM105.175 151.344L95.6442 137.662H113.751L105.175 151.344ZM115.754 137.398L110.194 146.269L128.729 126.386L115.754 137.398ZM82.0013 94.4923L70.8571 136.115H93.1429L82.0013 94.4923ZM40.5818 116.909L27.5892 117.829L47.0788 134.369L40.5818 116.909ZM136.412 117.829L123.418 116.909L116.923 134.369L136.412 117.829ZM69.9534 138.091L60.0244 152.346L75.0661 157.311L80.9844 149.01L69.9534 138.091ZM92.2718 137.662H71.7285L82.0013 147.83L92.2718 137.662Z"
                          fill="black"/>
                </svg>

            </div>

            <p>????????????</p>
            <h1 class="balancevalue">0.00 $</h1>
        </div>
        <div>
            <p class="alertmessage">
                <span></span><span class="alert-block">!</span>
            </p>
            <form class="box rgb-border">
                <p>?????????????? ?????????? ????????????????:</p>
                <input type="number" id="topupamount" placeholder="?????????? $0.00">
                <div class="paymethods">
                    <a class="paymethodblock" data-type="card">
                        <img src="../img/paycard.png" alt="">
                        <h3 class="maintext">Visa/Master Card</h3>
                        <p>???????????????? 2%</p>
                    </a>
                    <a class="paymethodblock disactive" data-type="btc">
                        <img src="../img/paybitcoin.png" alt="">
                        <h3 class="maintext">BitCoin (BTC)</h3>
                        <p>???????????????? 0%</p>
                    </a>
                    <a class="paymethodblock disactive" data-type="trc">
                        <img src="../img/paytether.png" alt="">
                        <h3 class="maintext">Tether (TRC-20)</h3>
                        <p>???????????????? 0%</p>
                    </a>
                </div>
                <button type="submit" id="submittopup" class="helpbutton">??????????????????</button>
            </form>
        </div>

    </main>
</div>

<script src="../js/jquery.js"></script>
<script type="module" src="../js/admin.js"></script>
<script src="../js/adminfunctions.js"></script>
<script src="../js/burger.js"></script>
<script>
    const payMethodBlocks = document.querySelectorAll('.paymethodblock');

    payMethodBlocks.forEach((block) => {
        block.addEventListener('click', () => {
            payMethodBlocks.forEach((b) => {
                if (b !== block) {
                    b.classList.remove('active');
                }
            });
            if (!block.classList.contains('disactive'))
                block.classList.add('active');
        });
    });
</script>
<script type="module">
    import Cookies from '../js/js.cookie.min.js';

    let submit = document.getElementById('submittopup');
    message('', 'off');
    submit.addEventListener('click', function (e) {
        e.preventDefault();
        let input = document.getElementById('topupamount');
        message('', 'off')
        input.value < 25 ? message('?????????????????????? ?????????? ???????????????????? $25', 'alert') : '';

        let type = $('.paymethodblock.active').data('type');
        type === undefined ? message('???? ???? ?????????????? ?????????? ????????????', 'warning') : '';
        if (input.value >= 25 && type !== undefined) {
            $.ajax({
                url: '../app/top_up.php',
                type: 'POST',
                data: {
                    amount: input.value,
                    type,
                    id: Cookies.get('id'),
                },
                success: function (response) {
                    if (response.success) {
                        message('???????????? ?????????????? ??????????????', 'ok');
                        window.open(response.url, '_blank')
                    }
                }
            })
        }
    })
</script>
</body>
</html>
