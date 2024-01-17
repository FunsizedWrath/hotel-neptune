<?php

require_once __DIR__ . '/../activate_session.php';
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../check_admin.php';

if (isset($_SESSION['user'])) {
    header('Location:/index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check that form is filled out
    if (
        (!isset($_POST['email']) || !isset($_POST['password']))
        || (empty($_POST['email']) || empty($_POST['password']))
        ) {
        exit("Le formulaire n'est pas complet.");
    }

    // check if user exists
    $request = $database->prepare('SELECT * FROM users u WHERE u.email = :email');
    $request->execute(['email' => $_POST['email']]);
    if (!($connected_user = $request->fetch())) { //$connected_user = all user info
        exit("L'utilisateur n'existe pas.");
    }

    // checking password
    if (!password_verify($_POST['password'], $connected_user['password'])) {
        exit("La paire email/mot de passe est incorrecte.");
    }

    // starting session
    session_start();
    $_SESSION['user'] = $connected_user;
    $is_admin = !!$_SESSION['user']['is_admin'];

    if (!$is_admin) {
        header('Location:/index.php');
        exit;
    }

    header('Location: /pageadmin.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Neptune Hotel </title>
        <link rel="stylesheet" href="styles/form.css"/>
    </head>
    <body>
        <div class="container">
        <h1> Connexion </h1>
        <div class="topnav navigation text-center">
        <a href="index.php">
            Accueil</a>
         <a href="register.php">
            Inscription</a>
        </div>
        <br>
        <div class="contact">
        <form action="" method="post">
            <div>
                <div>
                    <label for="email">Votre adresse e-mail</label>
                </div>
                <div>
                    <input type="text" name="email" placeholder="adresse@mail.com" required>
                </div>
            </div>
            <div class="d-flex">
                <label for="object">Mot de passe</label>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
                <button id="toggle-password" type="button" aria-label="Voir le mot de passe">Afficher le mot de passe</button>
            </div>
            <br> </br>
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>
</div>
</body>