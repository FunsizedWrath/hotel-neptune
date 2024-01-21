<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

$request = $database->prepare('SELECT * FROM rooms r');
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
      Gestion des chambres
  </div>
      <div class="option">
        <div><img src="images/plus.png" alt="moins"></div>
        <div><a href="add_room.php">AJOUTER UNE CHAMBRE</a></div>
      </div>
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
            <a href=<?php echo "modify_room.php?id=" . $room["id"] ?>><button> Modifier</button></a>
        </div>
    <?php } ?>
    </div>
</body>





</html>