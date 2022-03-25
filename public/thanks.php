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
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Merci !</title>
</head>
<body>
    <header>
        <?php include("./_header_nav.php") ?>
    </header>

    <?php
    
    $datas = array_map('trim', $_POST);

    $errors = [];

    if (empty($datas['userFirstName']))
        $errors[] = 'Votre prénom est obligatoire.';
    
    if (strlen($datas['userFirstName']) > 50)
        $errors[] = 'Votre prénom ne doit pas excéder 50 caractères.';

    if (empty($datas['userLastName']))
        $errors[] = 'Votre nom est obligatoire.';
    
    if (strlen($datas['userLastName']) > 100)
        $errors[] = 'Votre nom ne doit pas excéder 100 caractères.';

    if (empty($datas['userEmail']))
        $errors[] = 'Votre email est obligatoire.';

    if (!filter_var($datas['userEmail'], FILTER_VALIDATE_EMAIL))
        $errors[] = 'L\'email que vous avez rentré n\'est pas valide.';

    if (empty($datas['userMessage']))
        $errors[] = 'Merci de renseigner votre message. Sans ce dernier, nous ne pourrons donner suite à votre demande.';

    if (!empty($errors))
    {
        ?>
        <div class="container1">
    	<div class="receivedmessagecontainer">
    		<section class="sectionmessage">
    			<div class="messagebody">
    				<div class="container2">
                        <?php
                        foreach ($errors as $error)
                        {
                            echo '<h2 class="title">' . $error . '</h2>';
                        };
                        ?>
                        <button><a href="contact.php">Retour au formulaire</button></div>
                        <?php
                        exit();
                        ?>
    				</div>
    			</div>
    		</section>
    	</div>
    </div>

        <?php
    } else {
        ?>
    
    <div class="container1">
    	<div class="receivedmessagecontainer">
    		<section class="sectionmessage">
    			<div class="messagebody">
    				<div class="container2">
    					<h2 class="title">Bonjour <?= htmlentities($datas['userFirstName']) ?> <?= htmlentities($datas['userLastName']) ?> !  Nous avons bien reçu vote message. Le délai d'attente moyen est de 5 à 6 mois.</h2>
                        <button><a href="contact.php">Retour au formulaire</button></div>
    				</div>
    			</div>
    		</section>
    	</div>
    </div>

    <?php
    };
    ?>
    <!--
    <footer>
        <?php include '_footer.php';?>
    </footer>
-->
    <script src="./src/js/index_script.js"></script>
</body>
</html>