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
    <link rel="stylesheet" href="./src/css/hotels.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Hôtels incontournables</title>
</head>

<body>

    <header>
        <?php include("_header_nav.php"); ?>
        <div class="headerTitle">
            <p>Le saviez-vous ? Lyon est considéré comme la ville des Lumières depuis le 19ème siècle, en hommage à la Vierge Marie qui sauva Lyon de la Peste.</p>
        </div> 
    </header>

    <main>
        <section class="introduction">
            <h1>Les hôtels incontournables de Lyon</h1>
            <p>Visiter Lyon c'est bien, c'est merveilleux. Mais il faut bien recharger les batteries. Sur cette page retrouvez les bonnes adresses pour un sommeil réparateur.</p>
        </section>

        <section class="cards">
            <?php include("_cardBuilding.php"); ?>
        </section>
    </main>

    <footer>
        <?php include('_footer.php'); ?>
    </footer>

    <script src="./src/js/index_script.js"></script>
</body>

</html>