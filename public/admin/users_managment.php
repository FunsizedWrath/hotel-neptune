<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../../activate_session.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'check_admin.php';

$request = $database->prepare('SELECT * FROM users u');
$request->execute();

if (empty($users = $request->fetchAll())) {
    echo("Vous n'avez aucun utilisateur.");
}

usort($users, function ($a, $b) {
  return $a['id'] - $b['id'];
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
      Gestion des utilisateurs
  </div>
    </div>


    <div class="room-list">
    <?php foreach($users as $user) { ?>
      <div class="room">
          <div class="desc">
              <b>first_name : <?php echo $user['first_name'] ?></b>
              <br>
              <b>family_name : <?php echo $user['family_name'] ?></b>
              <br>
              <b>phone_nb : <?php echo $user['phone_nb'] ?></b>
              <br>
              <b>email : <?php echo $user['email'] ?></b>
            </div>
            <a href=<?php echo "modify_user.php?id=" . $user["id"] ?>><button> Modifier</button></a>
        </div>
    <?php } ?>
    </div>
</body>





</html>