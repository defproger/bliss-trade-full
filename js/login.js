import Cookies from './js.cookie.min.js'

const loginfunction = () => {
    $('#log-form').submit(function (event) {
        event.preventDefault();
        let data = {};
        $.each($(this).serializeArray(), (i, field) => {
            data[field.name] = field.value;
        });
        $.ajax({
            url: './app/user.php',
            type: 'POST',
            data: {
                method: 'log',
                data,
            },
            success: function (response) {
                console.log(response)
                if (response.success) {
                    Cookies.set('hash', response.hash, {expires: 1})
                    Cookies.set('id', response.id, {expires: 1})
                    window.location.href = "lk/index.php";
                } else {
                    infopopup(response.msg)
                }
            },
            error: function (error) {
                infopopup("Произошла неизвестная ошибка ):")
            }
        });
    });
}

let checklogin = Cookies.get('hash');
checklogin !== undefined ?
    $.ajax({
        url: './app/user.php',
        type: 'POST',
        data: {
            method: 'auth',
            hash: checklogin,
            id: Cookies.get('id')
        },
        success: function (response) {
            if (response.success) {
                window.location.href = "lk/index.php";
            } else {
                Cookies.remove('hash')
                Cookies.remove('id')
                loginfunction()
            }
        }
    })
    :
    loginfunction();

