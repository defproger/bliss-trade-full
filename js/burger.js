let burger = document.getElementById('burger');
let nav = document.getElementById('navmenu');
let open = false;


burger.addEventListener('click', () => {
    burger.classList.toggle('active')
    document.body.classList.toggle('active')

    setTimeout(() => {
        nav.classList.toggle('active')

    }, (Number(open) * 500))
    setTimeout(function () {
        nav.style.opacity = Number(open);

    }, 50)

    open = !open;
})
