const button = document.querySelector(".headerNavButton");

button.addEventListener("click", function() {
    if (button.style.transition === "rotate(180deg)")
    {
        button.style.transform = "rotate(180deg)";
        button.style.transform = "0.5s";
    } else {
        button.style.transform = "rotate(-180deg)";
        button.style.transition = "0.5s";    
    }
});

//Script pour le carroussel

/*Creation des éléments du DOM dont j'ai besoin pour appeler le carroussel*/
document.main.onload=function(){
    const nbr=10;
    const p=0;

    const container = document.getElementById("container");
    const g = document.getElementById("g");
    const d = document.getElementById("d");
    container.style.width=(360*nbr)+"px";
        for(i=1; i<nbr;i++){
            div = document.createElement("div");
            div.className="photo";
            div.style.backgroundImage="url('src/assets/carroussel_pictures/img"+i+".jpg')";
            container.appendChild(div);
        }
    afficherMasquer();
}

/*Fonction de clic pour chaque bouton*/
    g.onclick=function(){
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
        }

/*Fonction pour afficher ou masquer le bouton pour changer les images*/
    function afficherMasquer(){
        if(p === -nbr + 1)
            g.style.visibility="hidden";
        else
            g.style.visibility="visible";
            
        if(p === 0)
            d.style.visibility="hidden";
        else
            d.style.visibility="visible";
        }
