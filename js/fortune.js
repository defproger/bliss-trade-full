function random(min, max) {
    let rand = min + Math.random() * (max + 1 - min);
    return Math.floor(rand);
}

let btn = document.getElementById('paybutton');

let userspins = -1;
const prize = (id, code) => {
    let wheel = document.getElementById('wheel');
    let lights = document.getElementsByClassName('lights')[0];
    let wheelstyles = window.getComputedStyle(wheel);
    let matrix = wheelstyles.getPropertyValue('transform').match(/^matrix\((.+)\)$/)[1].split(",");
    let angle = Math.round(Math.atan2(matrix[1], matrix[0]) * (180 / Math.PI));

    const possibleangles = [-8, -7, -6, 10, 11, 12, 13];
    let stopangle = 380 - (id * 22.5) + possibleangles[random(0, possibleangles.length)];
    // let stopangle = 380 - (id * 22.5) + 13;
    let spins = 4;
    let animation = 'cubic-bezier(.42,-0.1,0,1.07)';
    let animationtime = 15;

    userspins++;
    btn.classList.add('active');

    // wheel.style.animation = 'none';
    // lights.style.animation = 'none';
    if (userspins !== 0) {
        wheel.style.transition = 'all 3s linear';
        lights.style.transition = 'all 3s linear';
        wheel.style.transform = `rotate(0deg)`;
        lights.style.transform = `rotate(-11deg)`;
    }
    setTimeout(() => {
        wheel.style.transition = `all ${animationtime}s ${animation}`;
        lights.style.transition = `all ${animationtime}s ${animation}`;
        wheel.style.transform = `rotate(${stopangle + (360 * spins)}deg)`;
        lights.style.transform = `rotate(${stopangle - 11 + (360 * spins)}deg)`;


        setTimeout(() => {
            let text = '';
            for (const textElement of wheel.children[id - 1].children) {
                text += textElement.innerText + ' ';
            }


            let image = wheel.children[id - 1].children[wheel.children[id - 1].children.length - 1];
            if ($(image).attr('src') != undefined) {
                $('.popup__product__title')[0].innerHTML = text;
                $('.coupon__block_prize_code')[0].innerHTML = code;
                $('.popup__product__img').attr('src', $(image).attr('src'));
                setTimeout(() => {
                    openpopupfunction()
                }, 500);
            } else {
                if (id === 11)
                    $("#pop_up3  .popup__product__title")[0].classList.add('fornonel')
                else
                    $("#pop_up3  .popup__product__title")[0].classList.remove('fornonel')
                $('#pop_up3 .popup__product__title')[0].innerHTML = wheel.children[id - 1].children[wheel.children[id - 1].children.length - 1].innerText;
                $('#pop_up3 .coupon__block_prize_code')[0].innerHTML = code;
                $('#pop_up3 .popup__product__img').attr('src', $(image).attr('src'));
                setTimeout(() => {
                    opensecondviewpopup();
                }, 500);
            }

            setTimeout(() => {
                btn.classList.remove('active');
            }, 1000);
        }, 15000)
    }, userspins !== 0 ? 3000 : 0)
}

const infopopup = (text) => {
    var popup = $(`<div class="infopopup"><p class="maintext">${text}</p><span class="closebtn">&times;</span></div>`);

    $('body').append(popup);

    // Появление попапа с эффектом затухания в течение 300 миллисекунд
    popup.fadeIn(300);

    // Закрытие попапа при нажатии вне блока
    $(window).click(function (event) {
        if (event.target != popup[0]) {
            popup.fadeOut(300, function () {
                popup.remove();
            });
        }
    });

    // Закрытие попапа при нажатии на крестик
    $('.closebtn').click(function () {
        popup.fadeOut(300, function () {
            popup.remove();
        });
    });

    btn.classList.remove('active');

}
btn.addEventListener('click', (e) => {
    e.preventDefault();
    if (!btn.classList.contains('active')) {
        btn.classList.add('active');
        let promo = document.querySelector('#promo').value;
        $.ajax({
            url: './app/proccesing.php',
            type: 'POST',
            data: {key: promo},
            success: function (response) {
                let data = JSON.parse(response);
                data = data[0];
                if (data.status === 'winner')
                    prize(data.prize, data.code_prize);
                else if (data.status === 'used')
                    infopopup('Этот код уже использован');
                else if (data.status === 'undefinedpromo')
                    infopopup('Такого кода не существует');

            },
            error: function (xhr, status, error) {
                infopopup('Ошибка, попробуйте позже');
                btn.classList.remove('active');

            }
        });
    }

});


//notification
let mobilelinechecker = false;
const notification = (name, prize) => {
    let info = $(`
    <div class="notification">
        <p>${name}</p>
        <h4>Выйграл</h4>
        <h1>${prize}</h1>
    </div>
    `);

    let notifyElem = $('#notifications')
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        if (!mobilelinechecker) {
            notifyElem.append($("<marquee id='mobilenotify'></marquee>"))
            mobilelinechecker++;
        }
        info[0].style.display = 'inline-flex';
        notifyElem = $("#mobilenotify")

    }
    notifyElem.append(info);

    info.fadeIn(700);

    if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
        setTimeout(() => {
            info.fadeOut(700);
        }, 8000);
    }

}


if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    $.ajax({
        url: './app/notifications.php',
        type: 'POST',
        data: {getdata: 50},
        success: function (response) {
            let datas = JSON.parse(response);
            if (datas[1] !== undefined)
                for (const data of datas) {
                    notification(`Кто то из города ${data.name}`, `${data.prize}`);
                }
        }
    });
} else {
    setInterval(() => {
        $.ajax({
            url: './app/notifications.php',
            type: 'POST',
            data: {getdata: 1},
            success: function (response) {
                let data = JSON.parse(response);
                data = data[0];
                if (data.name !== undefined)
                    notification(`Кто то из города ${data.name}`, `${data.prize}`);
            }
        });
    }, 5000);
}

