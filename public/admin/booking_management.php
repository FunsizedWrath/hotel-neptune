<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

$request = $database->prepare('SELECT reservation.id as res_id, * FROM users JOIN reservation ON users.id = reservation.user_id JOIN rooms ON reservation.room_id=rooms.id');
$request->execute();

if (empty($reservations = $request->fetchAll())) {
    echo("Vous n'avez aucune reservation.");
}

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
      Gestion des réservations
  </div>
    <div class="room-list">
    <?php foreach($reservations as $reservation) { ?>
      <div class="room">
          <div class="desc">
              <b>Date d'arrivée : <?php echo $reservation['date_arrivee'] ?></b>
              <br>
              <b>Date de départ : <?php echo $reservation['date_depart'] ?></b>
              <br>
              <b>Chambre : <?php echo $reservation['num_ch'] ?></b>
              <br>
              <b>Gamme : <?php echo $reservation['gamme'] ?></b>
              <br>
              <b>Client : <?php echo ( "".$reservation['family_name']." ".$reservation['first_name']) ?></b>
              <br>
              <b>Téléphone : <?php echo $reservation['phone_nb'] ?></b>
              <br>
              <b>E-mail : <?php echo $reservation['email'] ?></b>
              <br>
              <b>Etat de la réservation : <?php echo $reservation['validation'] ? "Validée" : "En attente" ?></b>
              <br>
            </div>
            <?php if (isset($reservation['validation']) && $reservation['validation'] === 0) { ?>
              <a href=<?php echo "booking_validation.php?id=" . $reservation["res_id"] ?>><button> Valider</button></a>
              <a href=<?php echo "booking_suppr.php?id=" . $reservation["res_id"] ?>><button> Refuser</button></a>
              <?php } else { ?>
              <a href=<?php echo "booking_receipt.php?id=" . $reservation["res_id"] ?>><button> Facture</button></a>
              <a href=<?php echo "booking_suppr.php?id=" . $reservation["res_id"] ?>><button> Supprimer</button></a>
              <?php } ?>
          </div>
    <?php } ?>
    </div>
</body>
</html>