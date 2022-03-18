<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony, Cidjie, Théo and Vincent, Wcs 2022">
    <meta name="description" content="Bienvenue sur We love Lyon ! Découvrez la capitale des Gaules, la seule ville des Lumières.
    Retrouvez les plus beaux sites, les meilleurs hôtels et restaurants et bien plus !">
    <meta name="keywords" content="lyon, fourvière, confluence, restaurant, hôtels, monument, musée, parc, ballade, visite, indispensable, wild, code, school">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <title>Présentation</title>
</head>

<body>

    <header>
        <?php include('./_header_nav.php'); ?>
        <div class="headerTitle">
            <img src="./src/assets/logo/logofinal.png" alt="">
            <p>Le saviez-vous : Si vous voyez le Mont Blanc depuis ce point de vue, il pleut deux jours plus tard !</p>
        </div>
    </header>

    <main>
        <h1> Présentation</h1>
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>

    <div id="carroussel">

        <div id="container">
        </div>

        <img src="./src/assets/carroussel_pictures/bouton.png" class="bouton" id="d"/>
        <img src="./src/assets/carroussel_pictures/bouton.png" class="bouton" id="g"/>
     </div>

    </main>

    <footer>
        <?php include('./_footer.php'); ?>
    </footer>

    <script>

        /*Creation des éléments du DOM dont j'ai besoin pour appeler le carroussel*/
        document.body.onload=function(){
            nbr=10;
            p=0;

            const container = document.getElementById("container");
            const g = document.getElementById("g");
            const d = document.getElementById("d");
            container.style.width=(360*nbr)+"px";
            for(i=1; i<nbr;i++){
                div = document.createElement("div");
                div.className="photo";
                div.style.backgroundImage="url('./src/assets/carroussel_pictures/img"+i+".jpg')";
                container.appendChild(div);
            }
            afficherMasquer();
        }
        /*Fonction de clic pour chaque bouton*/
        g.onclick=function(){
            if(p > - nbr +1 )
                    p--;
            container.style.transform="translate("+p*360+"px)";
            container.style.transition="all 0.5s ease";
            afficherMasquer();
        }

        d.onclick=function(){
            if(p <0 )
                    p++;
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

    </script>
    <script src="./src/js/index_script.js"></script>
    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->

</body>

</html>