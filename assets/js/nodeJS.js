// Fonction pour les slides dans les pages pour les images de voitures

let img__slider = document.getElementsByClassName('image__slider');

let etape = 0;

let nb__image = img__slider.length;

let precedent = document.querySelector('.precedent');
let suivant = document.querySelector('.suivant');



function enleveActiveImage(){
    for (let i = 0; i < nb__image ; i++)
    {
        img__slider[i].classList.remove('active');
    }
}

suivant.addEventListener('click', function ()
{
    etape++;
    if (etape>= nb__image)
        etape=0;
    enleveActiveImage();
    img__slider[etape].classList.add('active');
})

precedent.addEventListener('click',function (){
    etape--;
    if (etape<0)
        etape=nb__image-1;
    enleveActiveImage();
    img__slider[etape].classList.add('active');
})

// Fontions pour les slide automatiques sans appuyer sur les boutons
setInterval(function (){
    etape++;
    if (etape>= nb__image)
        etape=0;
    enleveActiveImage();
    img__slider[etape].classList.add('active');
},8000)







