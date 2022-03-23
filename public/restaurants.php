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
    <link rel="stylesheet" href="./src/css/restaurants.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <title>Les restaurants incontournables de Lyon</title>
</head>

<body>

    <header>
        <!-- place pour le _header_nav.php -->
        <?php include("_header_nav.php"); ?>
        <div class="headerTitle">
            <p>On mange quoi ?</p>
            <p>Du jésus, des bugnes, de la rosette, des coussins, des quenelles, de la cervelle de canut ..? </p>
            <p>Et si on se faisait un petit Bouchon ?</p>
        </div> 
    </header>

    <main>
        <section class="introduction">
            <h1>Les restaurants incontournables de Lyon</h1>
            <p>Une petite faim, une grosse faim, affamez !!! Sur cette page retrouvez les bonnes adresses pour découvrir la meilleure cuisine au monde. Dans la ville des plus grands chefs.</p>
        </section>

        <section class="cards">
            <!-- place pour les cartes.php -->
            <?php include("_cardBuilding.php"); ?>
        </section>
    </main>

    <footer>
        <!-- place pour le _footer.php -->
        <?php include('_footer.php'); ?>
    </footer>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
    <script src="./src/js/index_script.js"></script>
</body>

</html>