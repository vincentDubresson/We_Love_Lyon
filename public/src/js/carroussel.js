// JS DU CARROUSSEL

const carroussel = [
    {
        picture: "src/assets/carroussel_pictures/img2.jpg",
        alt: "Photo d'une vue de fourvière depuis le pont de l'université",
        title: "Fourvière depuis les quais du Rhône"
    },
    {
        picture: "src/assets/carroussel_pictures/img1.jpg",
        alt: "Photo de la place bellecour de nuit",
        title: "Place Bellecour de nuit"
    },
    {
        picture: "src/assets/carroussel_pictures/img8.jpg",
        alt: "Photo de la place des Jacobins",
        title: "Place des Jacobins"
    },
    {
        picture: "src/assets/carroussel_pictures/img4.jpg",
        alt: "Photo d'une péniche sur la Saone",
        title: "Péniche sur la Saône"
    },
    {
        picture: "src/assets/carroussel_pictures/img5.jpg",
        alt: "Photo des quais du Rhone",
        title: "Quais du Rhône"
    },
    {
        picture: "src/assets/carroussel_pictures/img11.jpg",
        alt: "Photo des ponts lyonnais",
        title: "Ponts lyonnais"
    },
    {
        picture: "src/assets/carroussel_pictures/img14.jpg",
        alt: "Photo de la passerelle du palais de justice",
        title: "Passerelle du Palais de Justice"
    },
    {
        picture: "src/assets/carroussel_pictures/img12.jpg",
        alt: "Photo des quais de Saone",
        title: "Quais de Saône"
    },
];

const divCarroussel = document.getElementById('container');
const buttonD = document.getElementById('rightButton');
const buttonG = document.getElementById('leftButton');
const imageCarroussel = document.querySelector('.photo_carroussel');
const carrousselTitle = document.querySelector('.carroussel_title');
let i = 0;

buttonD.addEventListener('click', function(){
    if (i == carroussel.length - 1) {
        i = 0;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
        imageCarroussel.setAttribute('alt', carroussel[i].alt);
        carrousselTitle.innerHTML = `${carroussel[i].title}`;
    } else {
        i++;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
        imageCarroussel.setAttribute('alt', carroussel[i].alt);
        carrousselTitle.innerHTML = `${carroussel[i].title}`;
    } 
});


buttonG.addEventListener('click', function(){
    if (i == 0){
        i = carroussel.length - 1;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
        imageCarroussel.setAttribute('alt', carroussel[i].alt);
        carrousselTitle.innerHTML = `${carroussel[i].title}`;
    } else {
        i--;
        imageCarroussel.setAttribute('src', carroussel[i].picture);
        imageCarroussel.setAttribute('alt', carroussel[i].alt);
        carrousselTitle.innerHTML = `${carroussel[i].title}`;
    }      
});