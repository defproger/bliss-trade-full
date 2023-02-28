let btn = document.getElementById('paybutton');

const prize = (id, code) => {
    let wheel = document.getElementById('wheel');
    let lights = document.getElementsByClassName('lights')[0];
    let wheelstyles = window.getComputedStyle(wheel);
    const matrix = wheelstyles.getPropertyValue('transform').match(/^matrix\((.+)\)$/)[1].split(",");
    let angle = Math.round(Math.atan2(matrix[1], matrix[0]) * (180 / Math.PI));


    let stopangle = 380 - (id * 22.5) + 2;
    let spins = 4;

    // wheel.style.animation = 'none';
    // lights.style.animation = 'none';
    wheel.style.transition = 'all 1s linear';
    lights.style.transition = 'all 1s linear';
    wheel.style.transform = `rotate(0deg)`;
    lights.style.transform = `rotate(-11deg)`;
    setTimeout(() => {
        wheel.style.transition = 'all 15s ease';
        lights.style.transition = 'all 15s ease';
        wheel.style.transform = `rotate(${stopangle + (360 * spins)}deg)`;
        lights.style.transform = `rotate(${stopangle - 11 + (360 * spins)}deg)`;
    }, 1000)

    setTimeout(() => {
        let text = '';
        for (const textElement of wheel.children[id - 1].children) {
            text += textElement.innerText + ' ';
        }
        $('.popup__product__title')[0].innerHTML = text;

        $('.coupon__block_prize_code')[0].innerHTML = code;

        let image = wheel.children[id - 1].children[wheel.children[id - 1].children.length - 1];
        console.log($(image).attr('src'))
        if ($(image).attr('src') != undefined)
            $('.popup__product__img').attr('src', $(image).attr('src'));
        else {
            $('.popup__product__img').hide();
            $('.popup__body__container')[0].style.justifyContent = 'center';
            $('.popup__body__container')[0].style.marginTop = '105px';
        }
        openpopupfunction();
    }, 16000)

}

btn.addEventListener('click', (e) => {
    e.preventDefault();
    let data = document.querySelector('#promo').value;
    $.ajax({
        url: './proccesing.php',
        type: 'POST',
        data,
        success: function (response) {
            let data = JSON.parse(response);
            data = data[0];
            if (data.status === 'winner')
                prize(data.prize, data.code_prize);
        },
        error: function (xhr, status, error) {
            alert('Ошибка, попробуйте позже');
        }
    });

});
