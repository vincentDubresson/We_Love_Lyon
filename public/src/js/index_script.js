// Navigation List - Button

const button = document.querySelector(".headerNavButton");
const navDown = document.querySelector(".headerNavMin");

button.addEventListener('click', function() {
    button.classList.toggle("buttonDown");
    navDown.classList.toggle("navDown");
});

const clickDown = document.querySelector(".one");
clickDown.addEventListener('click', function(){
    clickDown.classList.toggle("clickDown");
})

const clickDownTwo = document.querySelector(".two");
clickDownTwo.addEventListener('click', function(){
    clickDownTwo.classList.toggle("clickDownTwo");
})

const clickDownThree = document.querySelector(".three");
clickDownThree.addEventListener('click', function(){
    clickDownThree.classList.toggle("clickDownThree");
})

const clickDownFour = document.querySelector(".four");
clickDownFour.addEventListener('click', function(){
    clickDownFour.classList.toggle("clickDownFour");
})

const clickDownFive = document.querySelector(".five");
clickDownFive.addEventListener('click', function(){
    clickDownFive.classList.toggle("clickDownFive");
})

const clickDownSix = document.querySelector(".six");
clickDownSix.addEventListener('click', function(){
    clickDownSix.classList.toggle("clickDownSix");
})

const clickDownSeven = document.querySelector(".seven");
clickDownSeven.addEventListener('click', function(){
    clickDownSeven.classList.toggle("clickDownSeven");
})


//Script pour le carroussel

/*Creation des éléments du DOM dont j'ai besoin pour appeler le carroussel*/
/*document.main.onload=function(){
    const nbr=10;
    const p=0;

    const container = document.getElementById("container");
    const g = document.getElementById("g");
    const d = document.getElementById("d");
    container.style.width=(360*nbr)+"px";
        for(i=1; i<nbr;i++){
            div = document.createElement("div");
            div.className="photo";
            div.style.backgroundImage="url('../../src/assets/carroussel_pictures/img"+i+".jpg')";
            container.appendChild(div);
        }
    afficherMasquer();
}*/

/*Fonction de clic pour chaque bouton*/
/*   g.onclick=function(){
        if(p > - nbr +1 ) p--;
        container.style.transform="translate("+p*360+"px)";
        container.style.transition="all 0.5s ease";
        afficherMasquer();
        }

    d.onclick=function(){
        if(p <0 ) p++;
        container.style.transform="translate("+p*360+"px)";
        container.style.transition="all 0.5s ease";
        afficherMasquer();
        }*/

/*Fonction pour afficher ou masquer le bouton pour changer les images*/
/*   function afficherMasquer(){
        if(p === -nbr + 1)
            g.style.visibility="hidden";
        else
            g.style.visibility="visible";
            
        if(p === 0)
            d.style.visibility="hidden";
        else
            d.style.visibility="visible";
        }*/

// SCRIPT CARROUSSEL ESSAI VINCENT
/*
const carroussel = [
    {
        picture: "../assets/carroussel_pictures/img1.jpg"
    },
    {
        picture: "../assets/carroussel_pictures/img2.jpg"
    },
    {
        picture: "../assets/carroussel_pictures/img3.jpg"
    },
    {
        picture: "../assets/carroussel_pictures/img4.jpg"
    },
    {
        picture: "../assets/carroussel_pictures/img5.jpg"
    },
];
*/
