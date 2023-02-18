$('.acc_answer_arrea').slideUp(300);

$('.acc_arrea_answer').click(function () {
    $(this).children('.acc_answer_arrea').slideToggle(300);
    $(this).toggleClass('active');
});
