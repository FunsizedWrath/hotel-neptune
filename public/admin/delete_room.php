<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if (isset($_GET['id'])) {
    $request = $database->prepare("DELETE FROM rooms WHERE id= :id");
    $request->execute(['id' => $_GET['id']]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Neptune Hotel </title>
    <link rel="stylesheet" href="../styles/form.css"/>
</head>
<body>
    <div class="container">
    <div class="topnav navigation text-center">
    <a href="index.php">Accueil</a>
    </div>
    <h1>La chambre a bien été supprimée</h1>
    <a href="room_management.php"><button>Retour à la gestion des chambres</button></a>

</body>