<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony, Cidjie, Théo and Vincent, Wcs 2022">
    <meta name="description" content="Bienvenue sur We love Lyon ! Découvrez la capitale des Gaules, la seule ville des Lumières.
    Retrouvez les plus beaux sites, les meilleurs hôtels et restaurants et bien plus !">
    <meta name="keywords" content="lyon, fourvière, confluence, restaurant, hôtels, monument, musée, parc, balade, visite, indispensable, wild, code, school">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <link rel="stylesheet" href="./src/css/lyon_ballad.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Balades lyonnaises</title>

</head>

<body>

    <header>

        <?php include("./_header_nav.php") ?>
        
        <div class="headerTitle">
            <p>Le saviez-vous : Derrière son faux air bourgeois, le Lyonnais est très abordable et ne manquera pas de vous aider si vous êtes perdus !</p>
        </div>

    </header>
    <main class = "mainBallad">

        <section class="introduction">
            <h1>Balade sur 1 ou 2 jours</h1>
            <p>Même si Lyon est une grande ville, elle n'en reste pas moins à taille humaine. Vous pouvez tout faire à pied, même si attention : quelques fois, ça grimpe !</p>
            <p>Nous vous proposons deux parcours qui vous permettront de visiter Lyon, en <a class="linksInPage" href="#oneDayBallad">un</a> ou <a class="linksInPage" href="#twoDaysBallad">deux jours</a>.</p>
            <p>Vous pouvez également récupérer le parcours complet <a href="./src/assets/pdf/balad_lyon.pdf" download="balad_lyon.pdf">au format PDF</a>.</p>
            <p>Bonne balade !</p>
        </section>

        <article>
            <iframe class="myMapsBallad" id="oneDayBallad" src="https://www.google.com/maps/d/embed?mid=1k6HnWGIYafP2l3RmQTJobhyy5RTvUOwR&ehbc=2E312F"></iframe>
            <h2>Première journée</h2>
            <div class="journey">
                <p><img class="journeyFloatLeft" src="./src/assets/picture/balad_lyon/balad_marche.jpg" alt="Marché de la Croix-Rousse"> • <em>MATIN</em> - Il est <strong>8h00</strong>, Lyon s'éveille... Votre journée commence par l'un des plus beaux marchés de Lyon.
                Rendez-vous aux abords de la <em>Mairie du 4ème arrondissement</em> sur le <strong>Boulevard de la Croix-Rousse</strong>
                pour découvrir les centaines d'étals de ce marché journalier.</p>
                <p> • Prenez la <em>rue Jean-Baptiste Say</em> afin de vous rendre en haut de la <em>Montée de la Grande Côte</em> et bénéficier
                d'une des <strong>plus belles vues de la ville</strong>. Poursuivez votre descente. Attardez-vous quelques minutes dans le jardin
                des plantes et son <strong>Amphithéâtre des Trois Gaules</strong>, puis redescendez sur le <em>Quai Saint Vincent</em> afin d'admirer
                le célèbre <strong>Mur des Lyonnais</strong>.</p>
                <p><img class="journeyFloatRight" src="./src/assets/picture/balad_lyon/balad_vieux_lyon.jpg" alt="Vieux Lyon"> • Poursuivez votre balade, en vous attardant dans le <strong>Vieux Lyon</strong>, quartier historique de la ville. Perdez-vous dans ces
                ruelles, si le coeur vous en dit, prenez le temps de manger une glace chez Terre Adélice. Vous pouvez également visiter le <strong>Musée de la miniature
                et du Cinéma</strong>, ou encore arpenter la nef de la <strong>Cathédrale Saint-Jean</strong>.</p>
                <p> • Terminez cette matinée bien chargée en dégustant la meilleure quenelle de Lyon, au <strong>Café du Soleil</strong>.</p>
                <p><img class="journeyFloatLeft" src="./src/assets/picture/balad_lyon/balad_romain.jpg" alt="Théâtre antique de Fourvière"> • <em>APRÈS-MIDI</em> - Après ce succulent, il
                est l'heure de faire un peu d'exercice qui vous aidera à la digestion ! Prenez la <em>Montée du Gourguillon</em> afin de rejoindre les 
                hauteurs de la <strong>Colline de Fourvière</strong>. Arrêtez vous un instant pour visiter gratuitement les vestiges des célèbres <strong>Théatres Gallo-Romains</strong>, puis
                prenez le temps de visiter la magnifique <strong>Basilique Notre Dame de Fourvière</strong> avant de profiter du plus beau panorama lyonnais.</p>
                <p> • Par la suite, redescendez de la colline en empruntant la <em>Montée Nicolas de Lange</em>. Vous verrez que ce passage est plus intéressant en descente
                qu'en montée ! Une fois arrivés vers la <strong>Gare Saint Paul</strong>, re-traversez la Saône afin de vous perdre aux abords de la <strong>Place des Terreaux</strong>.
                Profitez-en pour boire une pinte dans l'un des pubs les plus réputés de la <em>Rue Sainte Catherine</em> : <strong>Le Shamrock</strong>.</p>
                <p><img class="journeyFloatRight" src="./src/assets/picture/balad_lyon/balad_passerelle_vue.jpg" alt="Vue depuis la passerelle du Palais de Justice"> • Cette journée se termine bientôt. Prenez la célèbre <em>Rue de la République</em> (Rue de la Ré pour les Lyonnais) jusqu'à trouver la <em>rue Mercière</em>,
                petite ruelle connue des locaux pour ses bars et restaurants. Une fois que vous aurez dîné, terminez cette balade d'une journée en admirant la vue de la colline de Fourvière
                depuis la <strong>Passerelle du Palais de Justice</strong>.</p>
            </div>
        </article>

        <article>
            <iframe class="myMapsBallad" id="twoDaysBallad" src="https://www.google.com/maps/d/embed?mid=1P0iR-xrCRzxUj_3u8U30WID8TiySdFzD&ehbc=2E312F"></iframe>
            <h2>Deuxième journée</h2>
            <div class="journey">
                <p><img class="journeyFloatLeft" src="./src/assets/picture/balad_lyon/balad_tete_or.jpg" alt="Allée du Parc de la Tête d'Or"> • <em>MATIN</em> - Après une journée bien chargée, nous vous proposons un deuxième
                moins éreintant. Votre début de journée mettra en avant le poumon de la ville de Lyon, le <strong>Parc de la Tête d'Or</strong>. 30mn, 1h ou 2h ! Libre à vous de flâner
                à votre guise dans ce magnifique écrin de verdure. Par la suite, dirigez-vous sur les quais du Rhône, et descendez le long du fleuve. Vous arpenterez ainsi la célèbre <strong>Rive Droite du Rhône</strong>
                qui a été totalement réaménagée dans les années 2000. Une fois arrivé à hauteur de la <em>Fosse aux Ours</em>, prenez quelques instants pour admirer le plus beau bâtiment
                de la Presqu'île, classé au Patrimoine Mondial de l'Unesco : L'<strong>Hôtel Dieu</strong>. Jusqu'à la fin des années 2000, ce bâtiment accueillait un des plus gros hôpitaux
                lyonnais. À ce jour, il est devenu, en partie, un hôtel de luxe.</p>
                <p> • Traversez le Rhône par le <em>Pont de la Guillotière</em> afin de rejoindre la <strong>Place Bellecour</strong> et sa célèbre statue de Louis XIV (14 et non croix bâton V !).
                Vous pouvez vous permettre une petite pause repas dans un des restaurants de la <em>rue des Marronniers</em> avant de reprendre votre périple.</p>
                <p><img class="journeyFloatRight" src="./src/assets/picture/balad_lyon/balad_confluence.jpg" alt="Port de plaisance à Confluence"> • <em>APRÈS-MIDI</em> - Dirigez vous vers la <em>rue Victor Hugo</em>, une artère très commerçante du 2ème arrondissement. Dans le prolongement, vous accéderez à la <strong>Place Carnot</strong>. Célèbre en période de fête pour son marché de Noël, cette petite
                place abrite notamment deux statues en l'honneur de <strong>La République</strong> et de <strong>Napoléon 1er</strong>.</p>
                <p> • Dès à présent, traverser la <strong>Gare de Perrache</strong> afin de rejoindre le <em>Cours Charlemagne</em>. En continuant vers le sud, vous arriverez dans le 
                tout nouveau quartier de la <strong>Confluence</strong>. Ce fût, à l'époque, le plus gros marché alimentaire professionnel de la Région Rhône-Alpes, équivalent à Rungis en Région Parisienne. 
                Aujourd'hui, vous trouverez notamment le <strong>Centre Commercial de Confluence</strong> et son port de plaisance. D'ici, nous vous proposons de monter à bord des nouveaux bâteaux mouche, qui vous
                permettront de finir ces deux jours en beauté, par une remontée de la Saône, à la découverte de Lyon sur l'eau. Ces bateaux vous déposerons à deux pas du Vieux Lyon et du centre ville.</p>
            </div>
        </article>
    </main>
    <footer>
        <?php include("./_footer.php") ?>
    </footer>
    
    <script src="./src/js/index_script.js"></script>
</body>

</html>