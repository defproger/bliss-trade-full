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
                setBalance(user.balance)

            } else {
                window.location.href = "../login.html";
            }
        }
    }) : window.location.href = "../login.html";

const setBalance = (balance) => {
    let balanceElem = document.getElementsByClassName('balancevalue');
    for (const balanceElement of balanceElem) {
        balanceElement.innerHTML = "$" + balance;
    }
}
