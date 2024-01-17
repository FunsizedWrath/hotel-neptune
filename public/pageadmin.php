<?php

require_once __DIR__ . '/../activate_session.php';
require_once __DIR__ . '/../logout.php';
require_once __DIR__ . '/check_admin.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/index.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>

    <div class="topnav">
        <div class="gauche">
        <a class="active" href="index.php">Accueil</a>
        <a href="reserv.php">Reserver ma Chambre</a>
        <a href="listechambre.php">Liste des Chambres</a>
        <a href="contact.php">Nous Contacter</a>
        <a href="?action=logout">Me déconnecter</a>
        </div>
      <div class="droite">
        <a href="s'identifier.html"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
<br>
<br>
<br>
    <div class="titre">
        Bienvenue à l'Hotel Neptune
    </div>
    <div class="menu">
        <div class="article2">
            <div><img src="images/Vue_mer-hotel-neptune-berck_sur_mer_1(1).png" alt="Reserver"></div>
            <div> <a href=>MODIFIER LES CHAMBRES</a></div>
        </div>
        <div class="sousmenu">
            <div class="article3">
                <div><img src="images/pisicne-interieure-chambre-luxe-design.jpg" alt="chambre"></div>
                <div><a href="listechambre.php">MODIFIER RESERVATION</a></div>
            </div>
            <div class="article3">
                <div><img src="images/thumb_Reflets_du_soleil_couchant_sur_la_plage.jpg" alt="coucher de soleil"></div>
                    <div><a href="presentationcarnon.php">MODIFIER UTILISATEURS</a></div>
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
            <img src="public\images\logos-handicaps-blc.webp" alt="logohandicap">
   </div>
</body>

</html>