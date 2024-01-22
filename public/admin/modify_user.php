<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $request = $database->prepare('UPDATE users SET first_name=:first_name, family_name=:family_name,phone_nb=:phone_nb, email=:email WHERE id = :id');
    $request->execute([
        'id'=> $_GET['id'],
        'first_name'=>$_POST['first_name'],
        'family_name'=>$_POST['family_name'],
        'phone_nb'=>$_POST['phone_nb'],
        'email'=>$_POST['email'],
    ]);

    header('Location: users_management.php');
    exit;
}

$request = $database->prepare('SELECT * FROM users u WHERE u.id = :id');
$request->execute(['id' => $_GET['id']]);

if (empty($user = $request->fetch())) {
    echo("User non trouvée.");
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
        <a href="index.php">
            Accueil</a>
         <a href="login.php">
            Connexion</a>
        </div>
        <h1> Modification de <?php echo $user['family_name']; ?> </h1>
        <br>
        <div class="contact">
        <form action="" method="post">
            <div>
                <div>
                    <label for="first_name">first name *</label>
                </div>
                <div>
                    <input type="text" name="first_name" value="<?php echo $user['first_name'] ?>" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="family_name">family name *</label>
                </div>
                <div>
                    <input type="text" name="family_name" value="<?php echo $user['family_name'] ?>" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="phone_nb">Phone number *</label>
                </div>
                <div>
                    <input type="text" name="phone_nb" value="<?php echo $user['phone_nb'] ?>" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="email">Email *</label>
                </div>
                <div>
                    <input type="text" name="email" value="<?php echo $user['email'] ?>" required>
                </div>
            </div>
            <br>
            <div class="submit-buttons">
                <input type="submit" value="Enregistrer les modifications">
                <button class="delete" formaction="delete_user.php?id=<?php echo  $_GET['id']?>"><b>Supprimer l'utilisateur</b></button>
            </div>
            </div>
        </form>
    </div>
</div>
</body>