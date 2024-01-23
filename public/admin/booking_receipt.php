<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

if (!isset($_GET['id']))
{
    header('Location: booking_management.php');
    exit;
}

$request = $database->prepare('SELECT reservation.id as res_id, * FROM users
    JOIN reservation ON users.id = reservation.user_id
    JOIN rooms ON rooms.id = reservation.room_id
    WHERE reservation.id = :id');
$request->execute(['id' => $_GET['id']]);

if (empty($reservation = $request->fetch()))
{
    header('Location: booking_management.php');
    exit;
}

$stay_duration = abs(strtotime($reservation['date_depart']) - strtotime($reservation['date_arrivee']));
$years = floor($stay_duration / (365*60*60*24));
$months = floor(($stay_duration - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($stay_duration - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/pageadmin.css" />
    <link rel="stylesheet" href="styles/rooms.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>
    <?php require_once '../navbar.php' ?>
  <br>
  <br>
  <br>
    <div class="titre">
      Facture <?php echo $reservation['res_id']; ?>
  </div>

    <div class="room-list">
      <div class="room">
          <div class="desc">
              <b>Client : <?php echo ( "".$reservation['family_name']." ".$reservation['first_name']) ?></b>
              <br>
              <b>Téléphone : <?php echo $reservation['phone_nb'] ?></b>
              <br>
              <b>E-mail : <?php echo $reservation['email'] ?></b>
              <br>
              <b>Date d'arrivée : <?php echo $reservation['date_arrivee'] ?></b>
              <br>
              <b>Date de départ : <?php echo $reservation['date_depart'] ?></b>
              <br>
              <b>Gamme de la chambre : <?php echo $reservation['gamme'] ?></b>
              <br>
              <b>Prix par nuit : <?php echo $reservation['prix'] ?>€</b>
              <br>
              <b>Nombre de nuits : <?php echo $days; ?></b>
              <br>
              <b>Prix total : <?php echo $reservation['prix'] * $days ?>€</b>
            </div>
                <a href='booking_management.php'><button> Retour aux réservations</button></a>
          </div>
    </div>
</body>
</html>