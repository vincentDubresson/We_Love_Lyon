// JS DU CARROUSSEL

const carroussel = [
    {
        picture: "src/assets/carroussel_pictures/img2.jpg",
        alt: "Photo d'une vue de fourvière depuis le pont de l'université"
    },
    {
        picture: "src/assets/carroussel_pictures/img1.jpg",
        alt: "Photo de la place bellecour de nuit"
    },
    {
        picture: "src/assets/carroussel_pictures/img8.jpg",
        alt: "Photo de la place des Jacobins"
    },
    {
        picture: "src/assets/carroussel_pictures/img4.jpg",
        alt: "Photo d'une péniche sur la Saone"
    },
    {
        picture: "src/assets/carroussel_pictures/img5.jpg",
        alt: "Photo des quais du Rhone"
    },
];

const divCarroussel = document.getElementById('container');
const buttonD = document.getElementById('d');
const buttonG = document.getElementById('g');
const imageCarroussel = document.querySelector('.photo_carroussel');
let i = 0;

buttonD.addEventListener('click', function(){
    if (i == carroussel.length - 1) {
        i = 0;
        imageCarroussel.setAttribute('src', carroussel[i].picture);   
    } else {
        i++;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
    } 
});


buttonG.addEventListener('click', function(){
    if (i == 0){
        i = carroussel.length - 1;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
    } else {
        i--;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
    }      
});