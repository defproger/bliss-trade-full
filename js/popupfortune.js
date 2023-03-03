const popUp = document.querySelector('.pop_up');

const openpopupfunction = () => {
    $(popUp).fadeIn(300);
}


popUp.addEventListener('click', function (e) {
    const popupBody = document.querySelector('#pop_up_body1');
    const click = e.composedPath().includes(popupBody);
    if (!click) {
        $(popUp).fadeOut(300);
    }
});

//infopopup
const popUp2 = document.querySelector('#pop_up2');

const openinfo = () => {
    $(popUp2).fadeIn(300);
}


popUp2.addEventListener('click', function (e) {
    const popupBody = document.querySelector('#pop_up_body2');
    const click = e.composedPath().includes(popupBody);
    if (!click) {
        $(popUp2).fadeOut(300);
    }
});

//secondviewpopup
const popUp3 = document.querySelector('#pop_up3');

const opensecondviewpopup = () => {
    $(popUp3).fadeIn(300);
}


popUp3.addEventListener('click', function (e) {
    const popupBody = document.querySelector('#pop_up_body3');
    const click = e.composedPath().includes(popupBody);
    if (!click) {
        $(popUp3).fadeOut(300);
    }
});
