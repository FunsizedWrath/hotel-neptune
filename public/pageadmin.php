<?php

require_once __DIR__ . '/../activate_session.php';
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
    <?php require_once 'navbar.php' ?>
  <br>
  <br>
  <br>
    <div class="titre">
      Bienvenue sur la page administrateur
  </div>
    <div class="menu">
      <div class="option">
        <div><img src="images/lit.jpg" alt="lit"></div>
        <div><a href="admin/room_management.php">GESTION DES CHAMBRES</a></div>
      </div>
      <div class="option">
        <div><img src="images/calendrier.jpg" alt="lit"></div>
        <div><a href="admin/booking_managment.php">MODIFIER LES RESERVATIONS</a></div>
      </div>

      <div class="option">
        <div><img src="images/utilisateurs.webp" alt="lit"></div>
        <div><a href="admin/users_managment.php">MODIFIER LES UTLISATEURS</a></div>
      </div>
    </div>
</body>

</html>