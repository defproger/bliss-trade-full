let btn = document.getElementById('paybutton');

const prize = (id) => {
    let wheel = document.getElementById('wheel');
    let lights = document.getElementsByClassName('lights')[0];
    let wheelstyles = window.getComputedStyle(wheel);
    const matrix = wheelstyles.getPropertyValue('transform').match(/^matrix\((.+)\)$/)[1].split(",");
    let angle = Math.round(Math.atan2(matrix[1], matrix[0]) * (180 / Math.PI));



    let stopangle = 380 - (id * 22.5) + 2;
    let spins = 4;

    // wheel.style.animation = 'none';
    // lights.style.animation = 'none';
    wheel.style.transform = `rotate(${stopangle + (360*spins)}deg)`;
    lights.style.transform = `rotate(${stopangle - 11 + (360*spins)}deg)`;
    setTimeout(() => {

    },15000)

}

btn.addEventListener('click', (e) => {
    e.preventDefault();
    let data = document.querySelector('#promo').value;
    prize(6)
    $.ajax({
        url: './proccesing.php',
        type: 'POST',
        data,
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            alert('Ошибка, попробуйте позже');
        }
    });

});
