//for slider
let settings;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    settings = {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 50,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    }
    const tradeslider = new Swiper("#tradeslider", settings);

} else {

    settings = {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
    }
}

const commentslider = new Swiper("#commentlider", settings);







