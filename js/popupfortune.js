const openPopUp = document.getElementById('open_pop_up');
const container = document.querySelector('.pop_up_container');
const popUp = document.querySelector('.pop_up');

const openpopupfunction = () => {
    popUp.classList.add('active');
}


popUp.addEventListener('click', function (e) {
    const popupBody = document.querySelector('.pop_up_body');
    const click = e.composedPath().includes(popupBody);
    if (!click) {
        popUp.classList.remove('active');
    }
});
