<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

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
        <a href="contact.php">Nous Contacter</a>
        <a href ="?action=logout"> Me déconnecter</a>
      </div>
      <div class="droite">
        <a href="s'identifier.php"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
  <br>
  <br>
  <br>
    <div class="titre">
      Bienvenue dans le sous-menu modifier chambre
  </div>
    <div class="menu">
      <div class="option">
        <div><img src="images/moins.png" alt="plus"></div>
        <div><a href=>SUPPRIMER UNE CHAMBRE</a></div>
      </div>
      <div class="option">
        <div><img src="images/crayon.png" alt="modifier"></div>
        <div><a href=>MODIFIER UNE CHAMBRE</a></div>
      </div>

      <div class="option">
        <div><img src="images/plus.png" alt="moins"></div>
        <div><a href=>AJOUTER UNE CHAMBRE</a></div>
      </div>
    </div>
</body>





</html>