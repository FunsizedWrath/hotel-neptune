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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['search'])) {
        $request = $database->prepare("SELECT *
        FROM rooms r
        WHERE r.prix < :max_prix AND r.surface > :min_surface");
        $request->execute([
            'max_prix'=>$_POST['prix'],
            'min_surface'=>$_POST['min_surface']
        ]);
        $rooms = $request->fetchAll();
    } else if (isset($_POST['book'])) {
        header('Location: reservation/book_room.php?id=' . $_POST['book']);
    }
}

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

    <form action="" method="post">
        <div class="dates-form">
            <div class="form-controls">
                <!-- <div class="form-input">
                    <label for="date" >Date arrivée :</label> <br>
                    <input type="date" name="arrivee" required><br><br>
                </div>

                <div class="form-input">
                    <label for="date2" >Date départ :</label> <br>
                    <input type="date" name="depart" required><br><br>
                </div> -->

                <div class="form-input">
                    <label for="prix" >Prix maximum :</label> <br>
                    <input type="number" name="prix" value="9999"><br><br>
                </div>

                <div class="form-input">
                    <label for="min_surface" >Surface minimum :</label> <br>
                    <input type="number" name="min_surface" value="0"><br><br>
                </div>
            </div>

            <button name="search" class="search-button" type="submit"><b>Chercher</b></button>
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
                    </div>
                    <button name="book" value="<?php echo $room['id'] ?>">Réserver</button>
                </div>
            <?php } ?>
        </div>
    </form>
</body>





</html>