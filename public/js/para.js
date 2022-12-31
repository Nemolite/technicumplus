/* пара */
let fcurs1 = document.querySelector('#fcurs1');
let fcurs2 = document.querySelector('#fcurs2');
let fcurs3 = document.querySelector('#fcurs3');
let fcurs4 = document.querySelector('#fcurs4');

let outcurs1 = document.querySelector('#outcurs1');
let outcurs2 = document.querySelector('#outcurs2');
let outcurs3 = document.querySelector('#outcurs3');
let outcurs4 = document.querySelector('#outcurs4');

fcurs1.addEventListener('click',function (){
    outcurs1.style.display = 'block';
    outcurs2.style.display = 'none';
    outcurs3.style.display = 'none';
    outcurs4.style.display = 'none';
})

fcurs2.addEventListener('click',function (){
    outcurs1.style.display = 'none';
    outcurs2.style.display = 'block';
    outcurs3.style.display = 'none';
    outcurs4.style.display = 'none';
})

fcurs3.addEventListener('click',function (){
    outcurs1.style.display = 'none';
    outcurs2.style.display = 'none';
    outcurs3.style.display = 'block';
    outcurs4.style.display = 'none';
})

fcurs4.addEventListener('click',function (){
    outcurs1.style.display = 'none';
    outcurs2.style.display = 'none';
    outcurs3.style.display = 'none';
    outcurs4.style.display = 'block';
})
