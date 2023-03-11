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

}
