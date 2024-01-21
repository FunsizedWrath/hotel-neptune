<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Réserver</title>
    <link href="styles/design.css" rel="stylesheet">
</head>

<body class="gamme"> 
    <div class="all">
    <div class="topnav">
        <div class="gauche">
        <a href="index.php">Accueil</a>
        <a class="active" href="page_reserve.php">Réserver ma Chambre</a>
        <a href="listechambre.php">Liste des Chambres</a>
        <a href="contact.php">Nous Contacter</a>
        <?php if (!isset($_SESSION['user'])) { ?>
            <a href="register.php">M'inscrire</a>
            <a href="login.php">Me connecter</a>
        <?php } else { ?>
            <a href ="?action=logout"> Me déconnecter</a>
        <?php } ?>
      </div>
      <div class="droite">
      <?php if (isset($_SESSION['user'])) { ?>
            <p>
                <?php echo "Bonjour " . $_SESSION['user']['first_name'] . " " . $_SESSION['user']['family_name'] ?>
                Vous êtes connecté.e
            </p>
        <?php } else { ?>
            <p> Vous n'êtes pas connecté.e </p>
        <?php } ?>
        <a href="login.php"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
        <br>
        <br>
        <br>

               
<div class="bloc">

<h2 class="center2"> Confirmation de votre réservation</h2>
<p id="info"> Votre réservation a été confirmée ! <br> Merci de votre confiance et à très bientôt ! </p>
<img class="center3" src="chambreex.webp" alt="Notre chambre" width=800 lenght=50>
  </div>

        

    </div>
</body>

</html>