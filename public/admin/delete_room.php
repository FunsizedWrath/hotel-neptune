<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

$stmt->prepare("DELETE FROM 'chambre' WHERE 'num_ch' = :num_ch");
$stmt->execute(['num_ch' => $_POST['num_ch']]);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Neptune Hotel </title>
        <link rel="stylesheet" href="styles/form.css"/>
    </head>
    <body>
        <div class="container">
        <h1> Inscription </h1>
        <div class="topnav navigation text-center">
        <a href="index.php">
            Accueil</a>
         <a href="login.php">
            Connexion</a>
        </div>
        <br>
        <div class="contact">
            <form action="" method="post">
                <div>
                    <div>
                        <label for="num_ch">Numero de Chambre *</label>
                    </div>
              <input type="submit" value="effacer une chambre">
                </div>
            </form>
        </div>
</div>
</body>