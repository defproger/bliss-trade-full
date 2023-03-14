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
    <link rel="stylesheet" href="../css/fortunepopup.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/mobile.css">
</head>
<body>
<div id="admin">
    <?php include "./components/header.php" ?>
    <?php include "./components/navbar.php" ?>
    <main id="userpage">
        <div class="infotexts">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66602 26.6667C6.66602 13.3333 9.99935 10 23.3327 10H56.666C69.9994 10 73.3327 13.3333 73.3327 26.6667V53.3333C73.3327 66.6667 69.9994 70 56.666 70H23.3327C9.99935 70 6.66602 66.6667 6.66602 53.3333V41.3333"
                      stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M46.666 26.6666H63.3327" stroke="black" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M50 40H63.3333" stroke="black" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M56.666 53.3334H63.3327" stroke="black" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M28.3341 37.6333C31.6662 37.6333 34.3674 34.9321 34.3674 31.6C34.3674 28.2679 31.6662 25.5667 28.3341 25.5667C25.002 25.5667 22.3008 28.2679 22.3008 31.6C22.3008 34.9321 25.002 37.6333 28.3341 37.6333Z"
                      stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M39.9994 54.4334C39.5327 49.6 35.6994 45.8 30.866 45.3667C29.1994 45.2 27.4993 45.2 25.7993 45.3667C20.966 45.8334 17.1327 49.6 16.666 54.4334"
                      stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <h1>Мой профиль</h1>
        </div>
        <form id="userform">
            <div class="flexinputs">
                <div>
                    <p>Персональный идентификатор</p>
                    <input type="text" placeholder="<?= $user['id'] ?>" name="userid" readonly>
                    <p>Имя</p>
                    <input type="text" placeholder="Имя" name="name" value="<?= $user['name'] ?>">
                    <p>Фамилия</p>
                    <input type="text" placeholder="Фамилия" name="surname" value="<?= $user['surname'] ?>">
                    <p>Отчество</p>
                    <input type="text" placeholder="Отчество" name="last_name" value="<?= $user['last_name'] ?>">
                </div>
                <div>
                    <p>Эл. адрес</p>
                    <input type="email" placeholder="Эл. адрес" name="email" value="<?= $user['email'] ?>">
                    <p>Телефон</p>
                    <input type="phone" placeholder="Телефон" name="phone" value="<?= $user['phone'] ?>">
                    <p>Пароль</p>
                    <input type="password" placeholder="Пароль" name="password">
                    <p>Повторить пароль</p>
                    <input type="password" placeholder="Повторить пароль" name="passwordrepeat">
                </div>
            </div>
            <button type="submit" class="helpbutton">
                <span>Сохранить</span>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9 7.93994L15.52 10.5599C16.29 11.3299 16.29 12.5899 15.52 13.3599L9 19.8699"
                          stroke="black"
                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 4.04004L10.04 5.08004" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </form>

    </main>
</div>

<script src="../js/jquery.js"></script>
<script type="module" src="../js/admin.js"></script>
<script src="../js/adminfunctions.js"></script>
<script src="../js/infopopup.js"></script>

<script src="../js/burger.js"></script>
<script type="module">
    import Cookies from '../js/js.cookie.min.js'

    $('#userform').submit(function (event) {
        event.preventDefault();
        let data = {};
        $.each($(this).serializeArray(), (i, field) => {
            data[field.name] = field.value;
        });
        $.ajax({
            url: '../app/user.php',
            type: 'POST',
            data: {
                method: 'edit',
                hash: Cookies.get('hash'),
                id: Cookies.get('id'),
                data,
            },
            success: function (response) {
                if (response.success) {
                    infopopup("Вы успешно изменили данные!")
                } else {
                    infopopup(response.msg)
                }
            },
            error: function (error) {
                infopopup("Произошла неизвестная ошибка ):")
            }
        });
    });
</script>

</body>
</html>
