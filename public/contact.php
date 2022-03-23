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
    <link rel="stylesheet" href="src/css/contact.css">
    <link rel="stylesheet" href="src/css/_head_foot_style.css">
    <link rel="stylesheet" href="src/css/css_init.css">
    <title>Contact - We Love Lyon</title>
</head>

<body>

    <header>
        <!-- place pour le _header_nav.php -->
        <?php include "_header_nav.php"; ?>

        <div class="photos">

            <div class="headerTitle">
                <p></p>
            </div>

        </div>
    </header>

    <main>
        <section class="introduction">
            <h1>Contacter l'équipe We Love Lyon</h1>
        </section>


        <section class="container">
            <div class="contactform">
                <form>
                    <div class="form-group">
                        <label for="name" class="form-label">Votre nom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Théo Boucher" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Votre e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="theo@boucher.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Votre message..." tabindex="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Envoyer!</button>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="vertical"></div>
            <div class="mapdesign">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1647596668820!6m8!1m7!1soa-4xaK4liT6cGLMLFRN7g!2m2!1d45.7462605948218!2d4.826823924592159!3f115.62334051088361!4f-9.116076249446763!5f0.7820865974627469" width="330" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div>
                <div class="textpresentation">
                    <p> 17 Rue Delandine, 69002 Lyon <br>
                        <button class="callbtn" onclick="window.location.href = 'tel:+33761501189';">07 61 50 11 89</button> <br>
                        samra.adrar@wildcodeschool.com
                    </p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <!-- place pour le _footer.php -->
        <?php include '_footer.php'; ?>
    </footer>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
    <script src="./src/js/index_script.js"></script>
</body>

</html>