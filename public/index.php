<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TA : Trés bonne idée d'ajouter les métas ! -->
    <meta name="author" content="Anthony, Cidjie, Théo and Vincent, Wcs 2022">
    <meta name="description" content="Bienvenue sur We love Lyon ! Découvrez la capitale des Gaules, la seule ville des Lumières.
    Retrouvez les plus beaux sites, les meilleurs hôtels et restaurants et bien plus !">
    <meta name="keywords" content="lyon, fourvière, confluence, restaurant, hôtels, monument, musée, parc, ballade, visite, indispensable, wild, code, school">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Accueil</title>
</head>

<body>

<!-- TA : Bon réflèxe d'avoir préparer un _header_nav.php à distribuer. 
Il est juste dommage de s'etre arreter en si bon chemin.
En effet ,  j'aurais préféré un _header_nav qui aurait pris TOUTE la balise header
et vous auriez pu régler le problème du titre qui change en préparant le contenu dans une 
variable :

$titleContent = '<img src="./src/assets/logo/_logo_noir.png" alt="Logo We love Lyon Noir">';
include('./_header_nav.php');

puis dans _header_nav.php:


    <header>
    <nav class="headerNavMin headerNavMax">

            <div class="headerNavLogo">
                <img src="src/assets/logo/logofinal.png" alt="logo We love Lyon">
            </div>

            <ul class="headerNavList">
                <li class="headerNavLinks"><a href="index.php">Accueil</a></li>
                <li class="headerNavLinks"><a href="beautiful_sites.php">Monuments</a></li>
                <li class="headerNavLinks"><a href="hotels.php">Hôtels</a></li>
                <li class="headerNavLinks"><a href="restaurants.php">Restaurants</a></li>
                <li class="headerNavLinks"><a href="lyon_ballad.php">Balades</a></li>
                <li class="headerNavLinks"><a href="contact.php">Contact</a></li>
            </ul>

            <button class="headerNavButton"><img src="src/assets/logo/chevronLight.png"></button>
            
        </nav> 
        <div class="headerTitle">
            <?= echo $titleContent; ?>
        </div>
    </header>

 -->
    <header>
        <?php include('./_header_nav.php'); ?>
        <div class="headerTitle">
            <img src="./src/assets/logo/_logo_noir.png" alt="Logo We love Lyon Noir">
        </div>
    </header>

    <main>
        
        <section class="introduction">
            <h1>Bienvenue à Lyon</h1>
            <p>Classée au Patrimoine Mondial de l'UNESCO, Lyon témoigne de
                 plus de 2 000 ans d’histoire et regorge de trésors architecturaux et culturels. Son patrimoine
                 exceptionnel s’enrichit de de constructions architecturales contemporaines prestigieuses.
                 Aujourd’hui métropole européenne majeure au rayonnement international de plus de 1,5 millions
                 d’habitants, grand pôle économique français, Lyon propose un cadre de vie attractif et dynamique.</p>
            <p>Capitale de la région Auvergne-Rhône-Alpes, Lyon est située à 2 heures de TGV de Paris et à moins
                 2 heures de la côte méditerranéenne et des stations de ski alpines. L’aéroport de Lyon-Saint-Exupéry
                 dessert un nombre très important de destinations.</p>
            <h2>We love Lyon</h2>
            <p>We love Lyon, c'est le site pour découvrir la capitale des Gaules, la seule ville des lumières. Retrouvez
                 les plus beaux sites, les meilleurs hôtels et restaurants, et bien plus !</p>        
        </section>

        

    <div id="carroussel">

        <div id="container">

            <img src="src/assets/carroussel_pictures/img12.jpg" alt="Photo des quais de Saone" class="photo_carroussel">
            <p class="carroussel_title">Photo des quais de Saone</p>
            <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="d" alt="bouton droite du carroussel"/>
            <!-- TA : Non id="d" n'est pas un bon nom pour un id -->
            <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="g" alt="bouton gauche du carroussel"/>
            <!-- TA : id="g" non plus ... -->
        </div>

    </div>


    </main>

    <!-- TA : Meme remarque que pour le header, mieux vaut inclure les balises
     <footer></footer> dans _footer.php
    -->
    <footer>
        <?php include('./_footer.php'); ?>
    </footer>

    <script src="src/js/index_script.js"></script>
    <script src="src/js/carroussel.js"></script>
</body>

</html>