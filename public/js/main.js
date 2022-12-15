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

let anews = document.querySelector('#anews');
let aour = document.querySelector('#aour');
let akon = document.querySelector('#akon');

let cnews = document.querySelector('#cnews');
let cour = document.querySelector('#cour');
let ckon = document.querySelector('#ckon');

anews.addEventListener('click',function (){
    cnews.style.display = 'block';
    cour.style.display = 'none';
    ckon.style.display = 'none';
})

aour.addEventListener('click',function (){
    cour.style.display = 'block';
    cnews.style.display = 'none';
    ckon.style.display = 'none';
})

akon.addEventListener('click',function (){
    ckon.style.display = 'block';
    cnews.style.display = 'none';
    cour.style.display = 'none';
})

/* Расписание  - Курсы*/
let kurs1= document.querySelector('#kurs1')
let allcontent = document.querySelectorAll('.content')
for(content of allcontent){
    console.log(content)
}
kues1.addEventListener('click', function () {

    //ckurs1
})


