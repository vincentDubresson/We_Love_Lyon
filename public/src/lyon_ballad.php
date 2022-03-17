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
    <link rel="stylesheet" href="css/_head_foot_style.css">
    <link rel="stylesheet" href="css/css_init.css">
    <link rel="stylesheet" href="css/lyon_ballad.css">
    <title><!-- Titre à changer --></title>
</head>

<body>

    <header>

        <?php include("_header_nav.php") ?>
        
        <div class="headerTitle">
            <p>Le saviez-vous : Si vous voyez le Mont Blanc depuis ce point de vue, il pleut deux jours plus tard !</p>
        </div>

    </header>
    <main class = "mainBallad">

        <section class="introduction introBallad">
            <h1>Ballade sur 1 ou 2 jours</h1>
            <p>Même si Lyon est une grande ville, elle n'en reste pas moins à taille humaine. Vous pouvez tout faire à pied, même si attention : quelques fois, ça grimpe !</p>
            <p>Nous vous proposons deux parcours qui vous permettrons de visiter Lyon, en <a class="linksInPage" href="#oneDayBallad">un jour</a> ou <a class="linksInPage" href="#twoDaysBallad">deux jours</a>.</p>
            <p>Bonne ballade !</p>
        </section>

        <article>
            <h2 id="oneDayBallad">Première journée</h2>
            <iframe class="myMapsBallad" src="https://www.google.com/maps/d/embed?mid=1k6HnWGIYafP2l3RmQTJobhyy5RTvUOwR&ehbc=2E312F" width="70%" height="350" ></iframe>
            <div class="journey">
                <p><img class="journeyFloatLeft" src="https://via.placeholder.com/300x150" alt=""> - <em>MATIN</em> - Il est <strong>8h00</strong>, Lyon s'éveille... Votre journée commence par l'un des plus beaux marché de Lyon.
                Rendez-vouz aux abords de la <em>Mairie du 4ème Arrondissement</em> sur le <strong>Boulevard de la Croix-Rousse</strong>
                pour découvrir les centaines d'étals de ce marché journalier.</p>
                <p> - Prenez la <em>rue Jean-Baptiste Say</em> afin de vous rendre en haut de la <em>Montée de la Grande Côte</em> et bénéficer
                d'une des <strong>plus belles vues de la Ville</strong>. Poursuivez votre descente. Attardez-vous quelques minutes dans le jardin
                des plantes et son <strong>Amphithéatre des Trois Gaules</strong>, puis redescendez sur le <em>Quai Saint Vincent</em> afin d'admirer
                le célèbre <strong>Mur des Lyonnais</strong>.</p>
                <p><img class="journeyFloatRight" src="https://via.placeholder.com/300x150" alt=""> - Poursuivez-votre ballade, en vous attardant dans le <strong>Vieux Lyon</strong>, quartier historique de la Ville. Perdez-vous dans ces
                ruelles, si le coeur vous en dit, prenez le temps de manger une glace chez Terre Adélice. Vous pouvez également visiter le <strong>Musée de la miniature
                et du Cinéma</strong>, ou encore arpenter la nef de la <strong>Cathédrale Saint-Jean</strong>.</p>
                <p> - Terminez cette matinée bien chargée en dégustant la meilleure quenelle de Lyon, au <strong>Café du Soleil</strong>.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
            </div>
        </article>

        <article>
            <h2 id="twoDaysBallad">Deuxième journée</h2>
            <iframe class="myMapsBallad" src="https://www.google.com/maps/d/embed?mid=1P0iR-xrCRzxUj_3u8U30WID8TiySdFzD&ehbc=2E312F" width="70%" height="350"></iframe>
            <div class="journey">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet perferendis nesciunt necessitatibus, molestias doloremque reprehenderit aliquam voluptate nulla repellat delectus architecto modi ut non, alias quasi vero perspiciatis natus sit.</p>
            </div>
        </article>
    </main>
    <footer>
        <?php include("_footer.php") ?>
    </footer>
    <!-- place pour le _footer.php -->

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
</body>

</html>