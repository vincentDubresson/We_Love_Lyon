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
    <link rel="stylesheet" href="src/css/thanks.css">
    <title>We love Lyon - Message envoyé</title>
</head>
<body>
<header>

        <?php include("./_header_nav.php") ?>
        <div class="headerTitle">
            <p></p>
        </div>

    </header>

<div class="container1">
	<div class="receivedmessagecontainer">
		<section class="sectionmessage">
			<div class="messagebody">
				<div class="container2">
					<h2 class="title"> Bonjour <?php echo $_GET['userFirstName']; ?> <?php echo $_GET['userLastName']; ?> !  Nous avons bien recu vote message, nous répondons en général entre 5 et 6 mois.</h2>
				</div>
			</div>
		</section>
	</div>
</div>

<footer>
        <!-- place pour le _footer.php -->
        <?php include '_footer.php';?>
    </footer>
    <script src="./src/js/index_script.js"></script>
</body>
</html>