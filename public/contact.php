<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/index.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>

<div class="topnav">
        <div class="gauche">
        <a href="index.php">Accueil</a>
        <a href="reservation/page_reserve.php">Réserver ma Chambre</a>
        <a href="listechambre.php">Liste des Chambres</a>
        <a  class="active" href="contact.php">Nous Contacter</a>
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
   <div class="contactg">
        <div>
                ADRESSE
                <br>
                <br>
                Hotel Neptune
                <br>
                239, rue de l’Etang de l’Or
                <br>
                Carnon Plage
                <br>
                34130 Mauguio
                <br>
                FRANCE
        </div>
        <div>
            RESERVATION
            <br>
            <br>
            Tel.: +33 (0)4 67 50 88 00
            <br>
            <br>
            Réservez en ligne !
        </div>
        <div>
            ACCESSIBILITE
            <br>
            <br>
            <img src="images/logos-handicaps-blc.webp" alt="logohandicap">
   </div>
   <div>
    MAIL<br><br>
    hotelneptune@gmail.fr
   </div>
</body>

</html>
