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
    <title>Contact - We Love Lyon</title>
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
            <h1>Contacter l'équipe We Love Lyon</h1>
        </section>
        
        <div class="container">
    <div class="contactform">
        <form>
            <h2> Nous contacter </h2>
            <input class="fromleft" type="email" placeholder="@" required>
            <input type="text" placeholder="Nom" required>
            <input class="bigtextinput" type="text" placeholder="Message" required>
            <input class="submitbuttn" type="submit" placeholder="Envoyer">
             </form>

         </form>


    </div>
    </div>
    <div class="vertical">
    </div> 
    <div class="map-responsive"> 
    <iframe src="https://www.google.com/maps/embed?pb=!4v1647596668820!6m8!1m7!1soa-4xaK4liT6cGLMLFRN7g!2m2!1d45.7462605948218!2d4.826823924592159!3f115.62334051088361!4f-9.116076249446763!5f0.7820865974627469" width="360" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>
    </div>
    </div>
    
    </main>

    <footer>
        <!-- place pour le _footer.php -->
        <?php include '_footer.php';?>
    </footer>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
    <script src="./src/js/index_script.js"></script>
</body>

</html>