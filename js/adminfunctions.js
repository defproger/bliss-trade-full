let message = (msg, type) => {

    let message = document.getElementsByClassName('alertmessage')[0];
    if (message !== undefined) {
        message.classList = 'alertmessage';
        message.style.opacity = type === 'off' ? '0' : '1';

        message.children[0].innerText = msg;
        message.classList.add(type)
    }

};
message('', 'off');


function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
        .then(() => {
            infopopup('Реферальная ссылка скопирована в буфер обмена')
        })
        .catch((error) => {
            console.error('Не удалось скопировать текст: ', error);
        });
}
