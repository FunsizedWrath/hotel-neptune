<?php

require_once __DIR__ . '/../activate_session.php';
require_once __DIR__ . '/../logout.php';
require_once __DIR__ . '/admin/check_admin.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/pageadmin.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>
    <div class="topnav">
        <div class="gauche">
        <a class="active" href="index.php">Accueil</a>
        <a href="reserv.php">Réserver ma Chambre</a>
        <a href="listechambre.php">Liste des Chambres</a>
        <a href="#inscr">M'inscrire</a>
        <a href="contact.php">Nous Contacter</a>
      </div>
      <div class="droite">
        <a href="s'identifier.php"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
  <br>
  <br>
  <br>
    <div class="titre">
      Bienvenue sur la page administrateur
  </div>
    <div class="menu">
      <div class="option">
        <div><img src="images/lit.jpg" alt="lit"></div>
        <div><a href=>MODIFIER LES CHAMBRES</a></div>
      </div>
      <div class="option">
        <div><img src="images/calendrier.jpg" alt="lit"></div>
        <div><a href=>MODIFIER LES RESERVATIONS</a></div>
      </div>

      <div class="option">
        <div><img src="images/utilisateurs.webp" alt="lit"></div>
        <div><a href=>MODIFIER LES UTLISATEURS</a></div>
      </div>
    </div>
</body>

</html>