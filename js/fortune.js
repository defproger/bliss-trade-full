let btn = document.getElementById('paybutton');


btn.addEventListener('click', (e) => {
    e.preventDefault();
    //todo input validate
    let data = document.querySelector('#promo').value;

    $.ajax({
        url: './proccesing.php',
        type: 'POST',
        data,
        success: function (response) {
            console.log( response);
        },
        error: function (xhr, status, error) {
            alert('Ошибка, попробуйте позже');
        }
    });

});
