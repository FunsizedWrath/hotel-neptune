<?php

require_once __DIR__ . '/../activate_session.php';
include_once __DIR__ . '/../database.php';

if (isset($_SESSION['user'])) {
    header('Location:/index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset ($_POST['first_name'])
        ||!isset ($_POST['family_name'])
        ||!isset ($_POST['email'])
        ||!isset ($_POST['phone_nb'])
        ||!isset ($_POST['password'])
        ||!isset ($_POST['password2'])

        ||empty ($_POST['first_name'])
        ||empty ($_POST['family_name'])
        ||empty ($_POST['email'])
        ||empty ($_POST['phone_nb'])
        ||empty ($_POST['password'])
        ||empty ($_POST['password2'])
        ) {
        exit("Le formulaire est incomplet.");
    }

    // does user exist
    $request = $database->prepare('SELECT id_user FROM users u WHERE u.email = :email');
    $request->execute(['email' => $_POST['email']]);

    if ($request->fetch()) {
        exit("L'utilisateur existe déjà.");
    }

    // password matching
    if ($_POST['password']!== $_POST['password2']){
        exit("Les mots de passe ne correspondent pas.");
    }

    // register with database
    $request = $database->prepare('INSERT INTO users(first_name, family_name, email, phone_nb, password) VALUES(:first_name, :family_name, :email, :phone_nb, :password)');
    $request->execute([
        'first_name'=>$_POST['first_name'],
        'family_name'=>$_POST['family_name'],
        'phone_nb'=>$_POST['phone_nb'],
        'email'=>$_POST['email'],
        'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);

    header('Location:/login.php');
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
                    <label for="first_name">Votre prénom *</label>
                </div>
                <div>
                    <input type="text" name="first_name" placeholder="Prénom" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="family_name">Votre nom *</label>
                </div>
                <div>
                    <input type="text" name="family_name" placeholder="Nom" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="email">Votre adresse e-mail *</label>
                </div>
                <div>
                    <input type="text" name="email" placeholder="adresse@mail.com" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="phone_nb">Votre numéro de téléphone *</label>
                </div>
                <div>
                    <input type="tel" name="phone_nb" placeholder="+33 6 11 22 33 44" required>
                </div>
            </div>
            <div class="d-flex">
                <label for="object">Mot de passe *</label>
            </div>
            <div>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button id="toggle-password" type="button" aria-label="Voir le mot de passe">Afficher le mot de passe</button>
            </div>
            <div>
                <label for="object">Confirmer le mot de passe *</label>

            </div>
            <div>
                <input type="password" name="password2" placeholder="Mot de passe" required>
                <button id="toggle-password" type="button" aria-label="Voir le mot de passe">Afficher le mot de passe</button>
            </div>
            <br> </br>
                <input type="submit" value="S'incrire">
            </div>
        </form>
    </div>
</div>
</body>