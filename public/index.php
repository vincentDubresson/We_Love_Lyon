<!DOCTYPE html>

<html lang="fr">

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
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Accueil</title>
</head>

<body>

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
                 exceptionnel s’enrichit de constructions architecturales contemporaines prestigieuses.
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
            <p class="carroussel_title">Quais de Saône</p>
            <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="rightButton" alt="bouton droite du carroussel"/>
            <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="leftButton" alt="bouton gauche du carroussel"/>
        
        </div>

    </div>


    </main>

    <footer>
        <?php include('./_footer.php'); ?>
    </footer>

    <script src="src/js/index_script.js"></script>
    <script src="src/js/carroussel.js"></script>
</body>

</html>