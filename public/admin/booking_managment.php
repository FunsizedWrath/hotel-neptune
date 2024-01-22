<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

$request = $database->prepare('SELECT * FROM reservation INNER JOIN users ON users.id = reservation.user_id  ');
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
      Gestion des reservations
  </div>

    <div class="room-list">
    <?php foreach($reservations as $reservation) { ?>
      <div class="room">
          <div class="desc">
              <b>date_arrivee : <?php echo $reservation['date_arrivee'] ?></b>
              <br>
              <b>date_depart : <?php echo $reservation['date_depart'] ?></b>
              <br>
              <b>client : <?php echo ( "".$reservation['family_name']." ".$reservation['first_name']) ?></b>
              <br>
              <b>telephone : <?php echo $reservation['phone_nb'] ?></b>
              <br>
              <b>email : <?php echo $reservation['email'] ?></b>
              <br>
              <b>validation : <?php if ($reservation['validation']) { echo("Validé");  } 
              else {
                echo("En attente");
              }?></b>
              <br>
            </div>
            <a href=<?php echo "booking_validation.php?id=" . $reservation["id"] ?>><button> Valider</button></a>
            <a href=<?php echo "booking_suppr.php?id=" . $reservation["id"] ?>><button> Supprimer</button></a>
          </div>
    <?php } ?>
    </div>
</body>





</html>