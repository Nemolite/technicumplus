/*
let card_body_btn = document.querySelectorAll('.card-body-btn')
let id;
let xhr
for (var i = 0; i < card_body_btn.length; i++) {
    card_body_btn[i].addEventListener('click',function (){
        console.log( this.getAttribute('data-id') );
        id = this.getAttribute('data-id');

        xhr = new XMLHttpRequest();
        xhr.open("GET", "/news"+"/"+id);
        xhr.send();
        xhr.onload = function() {
            if (xhr.status != 200) {
                console.log(`Ошибка- ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(`Готово, получили ${xhr.response.length} байт`);
                console.log(`Готово, получили ${xhr.response} байт`);
            }
        };
        xhr.onerror = function() {
            console.log("Запрос не удался");
        };
    })
}
*/
