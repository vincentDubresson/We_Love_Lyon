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
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/favicon/favicon-16x16.png">
    <title>We love Lyon - Contact</title>
</head>

<body>

    <header>
        <?php include("./_header_nav.php") ?>
        <div class="headerTitle">
            <p></p>
        </div>
    </header>

    <main>
        <section class="introduction">
            <h1>Contacter l'équipe We Love Lyon</h1>
        </section>
        
        <section class="formSection">
            <h2>Formulaire de contact</h2>
            <form  action="thanks.php" method="post">
                <div>
                    <label  for="firstName">Prénom</label>
                    <input  type="text"  id="firstName"  name="userFirstName" 
                            placeholder="Votre prénom" class="formcontrol" >
                </div>
                <div>
                    <label  for="lastName">Nom</label>
                    <input  type="text"  id="lastName"  name="userLastName" 
                            placeholder="Votre nom" class="formcontrol" >
                </div>
                <div>
                    <label  for="email">Email</label>
                    <input  type="email"  id="email"  name="userEmail" 
                            placeholder="example@example.com" class="formcontrol" >
                </div>
                <div>
                    <label  for="message">Message</label>
                    <textarea  id="message"  name="userMessage" class="formcontrol" ></textarea>
                </div>
                <div  class="buttonForm">
                    <button  type="submit">Envoyer </button>
                </div>
            </form>
        </section>

        <section class="teamPresentation">
            <h2>Présentation de l'équipe</h2>
            <p>Ce site web a entièrement été imaginé, modélisé, développé, normalisé et validé par notre team.</p>
            <div class="team">
                <div class="developpers">
                    <img src="./src/assets/logo/AGLogo.png" alt="Photo Anthony Gouton">
                    <ul class="teamList">
                        <li>Anthony Gouton</li>
                        <li><img src="./src/assets/logo/GitHub-Mark-32px.png" alt="GitHub logo"><a href="https://github.com/Anthony-AGTN"> @Anthony-AGTN</a></li>
                        <li><img src="/src/assets/logo/LI-In-Bug.png" alt="LinkedIn Logo"><a href="https://www.linkedin.com/in/anthony-gouton"> @anthony-gouton</a></li>
                    </ul>
                </div>
                <div class="developpers">
                    <img src="./src/assets/logo/CPLogo.png" alt="Photo Cidjie Prefol">
                    <ul class="teamList">
                        <li>Cidjie Prefol</li>
                        <li><img src="./src/assets/logo/GitHub-Mark-32px.png" alt="GitHub logo"><a href="https://github.com/Cid-Jie"> @Cid-Jie</a></li>
                        <li><img src="/src/assets/logo/LI-In-Bug.png" alt="LinkedIn Logo"><a href="https://www.linkedin.com/in/cidjie-prefol"> @cidjie-prefol</a></li>
                    </ul>
                </div>
                <div class="developpers">
                    <img src="./src/assets/logo/TBLogo.png" alt="Photo Théo Boucher">
                    <ul class="teamList">
                        <li>Théo Boucher</li>
                        <li><img src="./src/assets/logo/GitHub-Mark-32px.png" alt="GitHub logo"><a href="https://github.com/TheoBoucher38"> @TheoBoucher38</a></li>
                        <li><img src="/src/assets/logo/LI-In-Bug.png" alt="LinkedIn Logo"><a href="https://www.linkedin.com/in/theoboucher"> @theoboucher</a></li>
                    </ul>
                </div>
                <div class="developpers">
                    <img src="./src/assets/logo/VDLogo.png" alt="Photo Vincent Dubresson">
                    <ul class="teamList">
                        <li>Vincent Dubresson</li>
                        <li><img src="./src/assets/logo/GitHub-Mark-32px.png" alt="GitHub logo"><a href="https://github.com/vincentDubresson"> @vincentDubresson</a></li>
                        <li><img src="/src/assets/logo/LI-In-Bug.png" alt="LinkedIn Logo"><a href="https://www.linkedin.com/in/vincent-dubresson"> @vincent-dubresson</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="school">
            <div class="wcs">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11136.968598486492!2d4.8271688!3d45.7462912!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabc36e768b27c9a0!2sWild%20Code%20School%20-%20Formation%20d%C3%A9veloppeur%20web%20%26%20data%20analyst!5e0!3m2!1sfr!2sfr!4v1647890666917!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="adresse">
                    <h2>Wild Code School</h2>
                    <p><img class="adresseLogo" src="src/assets/logo/adressLogo.png" alt="Logo Adresse">19 rue Delandine 69002</p>
                    <p><img class="adresseLogo" src="src/assets/logo/URLLogo.png" alt="Logo URL"><a class="contacthover" href="https://wildcodeschool.fr">www.wildcodeschool.fr</a></p>
                    <p><img class="adresseLogo" src="src/assets/logo/mailLogo.png" alt="Logo Mail"><a class="contacthover" href="mailto:samra.adrar@wildcodeschool.com">Email</a></p>
                    <p><img class="adresseLogo" src="src/assets/logo/telLogo.png" alt="Logo Téléphone"><a class="contacthover" href="tel:+33761501189">07 61 50 11 89</a> </p>
                    <img class="wcslogo" src="./src/assets/logo/logo_wcs.png" alt="Logo Wild Code School">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include '_footer.php';?>
    </footer>

    <script src="src/js/index_script.js"></script>
</body>

</html>