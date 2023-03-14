import Cookies from './js.cookie.min.js'

let user;
let checklogin = Cookies.get('hash');
checklogin !== undefined ?
    $.ajax({
        url: '../app/user.php',
        type: 'POST',
        data: {
            method: 'auth',
            hash: checklogin,
            id: Cookies.get('id')
        },
        success: function (response) {
            if (response.success) {
                user = response.user;
                Cookies.set('user_balance', user.balance, {expires: 1})
                setUserData();
            } else {
                Cookies.remove('hash');
                Cookies.remove('user_balance');
                Cookies.remove('id');
                window.location.href = "../login.html";
            }
        }
    }) : window.location.href = "../login.html";

const setUserData = () => {
    let balanceElem = document.getElementsByClassName('balancevalue');
    for (const balanceElement of balanceElem) {
        balanceElement.innerHTML = "$" + Cookies.get('user_balance');
    }
}
setUserData();

document.querySelector('#exitfromlkbtn').addEventListener('click', (e) => {
    e.preventDefault();
    Cookies.remove('hash');
    Cookies.remove('id');
    window.location.href = "../login.html";
})

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    document.querySelector('.balancepagelink').addEventListener('click', () => {
        window.location.href = "./balance.php";
    })
}
