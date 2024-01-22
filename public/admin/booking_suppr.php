<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if (isset($_GET['id'])) {
    $request = $database->prepare("DELETE FROM reservation WHERE id= :id");
    $request->execute(['id' => $_GET['id']]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../styles/index.css" />
    <title> Neptune Hotel </title>
    <link rel="stylesheet" href="../styles/form.css"/>
</head>

<body>
<?php require_once "../navbar.php" ?>
<br>
<br>
<br>
    <h1>La réservation a bien été supprimée</h1>
    <a href="booking_management.php"><button>Retour à la gestion des réservations</button></a>

</body>