<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/../../database.php';

if((session_status() !== PHP_SESSION_ACTIVE) || (!isset($_SESSION['user']))) {
    header('Location: /login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $request = $database->prepare('UPDATE rooms SET num_ch=:num_ch, etage=:etage, surface=:surface, prix=:prix, gamme=:gamme WHERE id = :id');
    // $request->execute([
    //     'id'=> $_GET['id'],
    //     'num_ch'=>$_POST['num_ch'],
    //     'etage'=>$_POST['etage'],
    //     'surface'=>$_POST['surface'],
    //     'prix'=>$_POST['prix'],
    //     'gamme'=>$_POST['gamme'],
    // ]);

    // header('Location: room_management.php');
    // exit;
}

$request = $database->prepare('SELECT * FROM rooms r WHERE r.id = :id');
$request->execute(['id' => $_GET['id']]);

if (empty($room = $request->fetch())) {
    echo("Chambre non trouvée.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Réserver</title>
    <link href="../styles/design.css" rel="stylesheet">
</head>

<body class="gamme">
    <div class="all">
    <?php require_once "../navbar.php" ?>
        <br>
        <br>
        <br>


<div class="bloc">
    <h1>
        Réservation :
        <br> Chambre <?php echo $room['num_ch'] ?> de la gamme <?php echo $room['gamme'] ?>
    </h1>
    <form action="validation.php" method="post"></form>    <!-- a compléter -->
    <div class="center">
        <label for="date" >Date arrivée:</label> <br>
            <input type= "date" name= "date" id="barre" required><br><br>

        <label for="date2" >Date départ: </label> <br>
            <input type="date" name= "date2" id="barre" required><br><br>

        <button type="submit" id="bouton2" ><b>Vérifier la disponibilité</b></button></div>

    </form>
    </div>




    </div>
</body>

</html>