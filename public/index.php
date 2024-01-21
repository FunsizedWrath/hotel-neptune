<?php

require_once __DIR__ . '/../activate_session.php';

?>

<head>
    <link rel="stylesheet" href="styles/index.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>

    <div class="topnav">
        <div class="gauche">
        <a class="active" href="index.php">Accueil</a>
        <a href="reserv.php">Réserver ma Chambre</a>
        <a href="listechambre.php">Liste des Chambres</a>
        <a href="contact.php">Nous Contacter</a>
        <?php if (!isset($_SESSION['user'])) { ?>
            <a href="register.php">M'inscrire</a>
            <a href="login.php">Me connecter</a>
        <?php } else { ?>
            <a href ="?action=logout"> Me déconnecter</a>
        <?php } ?>
      </div>
      <div class="droite">
      <?php if (isset($_SESSION['user'])) { ?>
            <p>
                <?php echo "Bonjour " . $_SESSION['user']['first_name'] . " " . $_SESSION['user']['family_name'] ?>
                Vous êtes connecté.e
            </p>
        <?php } else { ?>
            <p> Vous n'êtes pas connecté.e </p>
        <?php } ?>
        <a href="login.php"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
<br>
<br>
<br>
    <div class="titre">
        Bienvenue à l'Hotel Neptune
    </div>
    <div class="menu">
        <div class="article1">
            <div><img src="images/Facade Hotel tiara miramar.jpg" alt="hôtel"></div>
                <div> <p>Curieux de voir ce que l'hôtel Neptune a à vous offrir ? Découvrez dès à présent nos cuisiniers et notre personnel...<a href="presentation.php">en savoir plus</a></p></div>
            </div>
        <div class="article2">
            <div><img src="images/Vue_mer-hotel-neptune-berck_sur_mer_1(1).png" alt="Reserver"></div>
            <div> <p>Déjà Convaincu ? Reservez Votre Chambre Dès Maintenant ! <a href="reserv.php">Réserver ma chambre</a></p></div>
        </div>
        <div class="sousmenu">
            <div class="article3">
                <div><img src="images/pisicne-interieure-chambre-luxe-design.jpg" alt="chambre"></div>
                <div> <p>Préférez vous la Chambre Royale ou nos chambres familiales ? Le luxe à portée de vos mains...<a href="listechambre.php">en savoir plus</a></p></div>
            </div>
            <div class="article3">
                <div><img src="images/thumb_Reflets_du_soleil_couchant_sur_la_plage.jpg" alt="coucher de soleil"></div>
                    <div> <p>Profitez d'un cadre paradisiaque, à deux pas de la mer de Carnon, Prenez les vacances que vous avez toujours rêvés...<a href="presentationcarnon.php">en savoir plus</a></p></div>
                </div>
        </div>
    </div>
   <div class="contact">
        <div>
                ADRESSE
                <br>
                <br>
                Hotel Neptune
                <br>
                239, rue de l’Etang de l’Or
                <br>
                Carnon Plage
                <br>
                34130 Mauguio
                <br>
                FRANCE
        </div>
        <div>
            RESERVATION
            <br>
            <br>
            Tel.: +33 (0)4 67 50 88 00
            <br>
            <br>
            Réservez en ligne !
        </div>
        <div>
            ACCESSIBILITE
            <br>
            <br>
            <img src="images/logos-handicaps-blc.webp" alt="logohandicap">
        </div>
   </div>
</body>

</html>
