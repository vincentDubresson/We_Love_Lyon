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
    <link rel="stylesheet" href="src/css/contact.css">
    <link rel="stylesheet" href="src/css/_head_foot_style.css">
    <link rel="stylesheet" href="src/css/css_init.css">
    <title>Les hôtels et restaurants incontournables de Lyon</title>
</head>

<body>

    <header>
        <!-- place pour le _header_nav.php -->
        <?php include "_header_nav.php";?>

        <div class="photos">

            <div class="header-type">
                <p>On mange quoi ?</p>
                <p>Du jésus, des bugnes, de la rosette, des coussins, des quenelles, de la cervelle de canut ..? </p>
                <p>Et si on se faisait un petit Bouchon ?</p>
            </div>

        </div>
    </header>

    <main>
        <section class="introduction">
            <h1>Contacter l'équipe de We Love Lyon</h1>
        </section>

        <section class="formulaire">
        <form>
    <h2>Nous contacter</h2>
    <input type="text" placeholder="@" required="required">
    <input type="text" placeholder="Prénom Nom" required="required">
    <input type="text" placeholder="Votre message" required="required">
    <input class ="submitbutton" type="submit" required="required">
</form>
        </section>
    </main>

    <footer>
        <!-- place pour le _footer.php -->
        <?php include '_footer.php';?>
    </footer>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
    <script src="./src/js/index_script.js"></script>
</body>

</html>