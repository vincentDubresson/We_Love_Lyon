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
    <link rel="stylesheet" href="./src/css/css_init.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/beautiful_sites.css">
    <title>Les sites mémorables - We Love Lyon</title>
</head>

<body>

    <header>
        
        <?php include("_header_nav.php"); ?>
        <div class="headerTitle">
            <p>Le saviez -vous ? Si vous voyez le Mont Blanc par temps clair depuis Lyon, il pleuvra deux jours après !</p>
        </div>

    </header>

    <main>

        <section class="introduction">
            <h1>Les sites incontournables de Lyon</h1>
            <p>Venez découvrir les plus beaux sites de Lyon. Si vous avez peu de temps, voici une petite collection des sites à ne pas manquer !</p>
        </section>

        <div class="parent_description">    
            <div class="photo_description">
                <img class="img" src="src/assets/picture/place_bellecour.jpg" alt="place_bellecour"/>
                <div class="photo_text">
                    <p class="title_photo">La place Bellecour</p>
                    <p class="content">
                    Le quartier Bellecour-Hôtel Dieu s'étend autour de la place Bellecour, dominée par une statue équestre en bronze de Louis XIV et entourée d'hôtels particuliers de l'époque napoléonienne. <button onclick="window.open('https://www.lyon-france.com/je-decouvre-lyon/sites-et-monuments/Sites-et-monuments-remarquables/La-Place-Bellecour', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>

            <div class="photo_description">
                <img class="img" src="src/assets/picture/musée_confluence.jpg" alt="musée_confluence"/>
                <div class="photo_text">
                    <p class="title_photo">Le musée des confluences</p>
                    <p class="content">
                    Le musée des Confluences est un musée d'histoire naturelle, d'anthropologie, des sociétés et des civilisations. Fait de verre, béton et inox, il se dresse comme un cap sur la pointe du confluent du Rhône et de la Saône. <button onclick="window.open('https://www.museedesconfluences.fr/fr', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>   

            <div class="photo_description">
                <img class="img" src="src/assets/picture/parc.jpg" alt="place_tete_dor"/>
                <div class="photo_text">
                    <p class="title_photo">Le parc de la tête d'or</p>
                    <p class="content">
                    Le parc de la Tête d’Or est l’un des plus grands parcs urbains de France. Il offre 105 hectares de vastes pelouses, arbres centenaires, massifs fleuris, apportant en toutes saisons des touches colorées et parfumées. <button onclick="window.open('https://www.lyon.fr/lieu/parcs/parc-de-la-tete-dor', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>

            <div class="photo_description">
                <img class="img" src="src/assets/picture/amphitheatre.jpg" alt="amphitheatre"/>
                <div class="photo_text">
                    <p class="title_photo">L'amphithéâtre gallo-romain</p>
                    <p class="content">
                    Autrefois capitale des Gaules, Lyon possède le plus ancien Amphithéâtre romain de la Gaule. Situé sur les pentes de la colline de la Croix-Rousse, il a été achevé en 19 après J-C. <button onclick="window.open('https://lugdunum.grandlyon.com/fr/', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>

            <div class="photo_description">
                <img class="img" src="src/assets/picture/cathedrale.jpg" alt="cathedrale"/>
                <div class="photo_text">
                    <p class="title_photo">La cathédrale Saint-Jean</p>
                    <p class="content">
                    Située au coeur du Vieux-Lyon, la Cathédrale Saint-Jean est un édifice mélangeant les styles gothique et roman. Sa construction s'étend sur trois siècles, de 1175 à 1481. <button onclick="window.open('https://www.lyon.fr/lieu/moyen-age/cathedrale-saint-jean', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>

            <div class="photo_description">
                <img class="img" src="src/assets/picture/pentes.jpg" alt="place_bellecour"/>
                <div class="photo_text">
                    <p class="title_photo">Les pentes de la Croix-Rousse</p>
                    <p class="content">
                    Le quartier animé des pentes de la Croix-Rousse s'articule autour du majestueux hôtel de ville, sur la place de la Comédie  et du musée des Beaux-Arts de Lyon, qui conserve des chefs-d'œuvre impressionnistes. <button onclick="window.open('https://www.polville.lyon.fr/des-quartiers-lechelle-de-la-ville/les-territoires/quartiers-de-centre-ancien/les-pentes-de-la-croix', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div>

            <div class="photo_description">
                <img class="img" src="src/assets/picture/fourviere.jpg" alt="fourviere"/>
                <div class="photo_text">
                    <p class="title_photo">Fourvière</p>
                    <p class="content">
                    Accessible en funiculaire depuis le Vieux Lyon, le quartier de Fourvière, au sommet d'une colline, s'articule autour de la basilique richement décorée de Notre-Dame de Fourvière. <button onclick="window.open('https://www.fourviere.org/fr/', '_blank');">Pour en savoir plus</button>
                    </p>
                </div>
            </div> 
        </div>

    </main>

    <footer>

        <?php include('_footer.php'); ?>

    </footer>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->
    <script src="./src/js/index_script.js"></script>

</body>

</html>