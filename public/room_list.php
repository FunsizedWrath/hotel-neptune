<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../database.php';

$request = $database->prepare('SELECT * FROM rooms r WHERE r.dispo = 1');
$request->execute();

if (empty($rooms = $request->fetchAll())) {
    echo("Vous n'avez aucune chambre.");
}

usort($rooms, function ($a, $b) {
    return $a['num_ch'] - $b['num_ch'];
});

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/rooms.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>
    <?php require_once 'navbar.php' ?>
  <br>
  <br>
  <br>
    <div class="titre">
      Liste des chambres
  </div>


    <div class="room-list">
    <?php foreach($rooms as $room) { ?>
      <div class="room">
          <div class="desc">
              <b>Numéro de chambre : <?php echo $room['num_ch'] ?></b>
              <br>
              <b>Gamme : <?php echo $room['gamme'] ?></b>
              <br>
              <b>Etage : <?php echo $room['etage'] ?></b>
              <br>
              <b>Surface : <?php echo $room['surface'] ?></b>
              <br>
              <b>Prix : <?php echo $room['prix'] ?> €</b>
              <br>
              <b>Disponibilité : <?php echo $room['dispo'] ? "Disponible" : "Indisponible" ?></b>
            </div>
            <a href=<?php echo "reservation/book_room.php?id=" . $room["id"] ?>><button>Réserver</button></a>
        </div>
    <?php } ?>
    </div>
</body>





</html>