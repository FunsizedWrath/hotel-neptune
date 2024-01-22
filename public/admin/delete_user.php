<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if (isset($_GET['id'])) {
    $request = $database->prepare("DELETE FROM users WHERE id= :id");
    $request->execute(['id' => $_GET['id']]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../styles/index.css" />
    <title> Neptune Hotel </title>
    <!-- <link rel="stylesheet" href="../styles/form.css"/> -->
</head>
<body>
<?php require_once "../navbar.php" ?>
<br>
<br>
<br>
    <div class="container">
    <div class="topnav navigation text-center">
    <a href="index.php">Accueil</a>
    </div>
    <h1>L'utilisateur a bien été supprimé</h1>
    <a href="users_management.php"><button>Retour à la gestion des utilisateurs</button></a>

</body>