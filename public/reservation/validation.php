<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Réserver</title>
    <link href="../styles/design.css" rel="stylesheet">
</head>

<body class="gamme">
    <div class="all">
      <div class="topnav">
        <div class="gauche">
        <a href="index.php">Accueil</a>
        <a href="reservation/page_reserve.php">Réserver ma Chambre</a>
        <a class="active" href="listechambre.php">Liste des Chambres</a>
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
        <a href="login.php"><img src="../images/icone.png" alt="identifant"></a>
      </div>
    </div>
        <br>
        <br>
        <br>


<div class="bloc">

<h2 class="center2"> Validation de votre réservation</h2>
<p id="info"> Vous allez réserver une chambre dans notre hôtel. <br>Afin de valider votre réservation, veuillez suivre les étapes en cliquant sur le bouton ci-dessous </p>

<form action="..." method="post"></form>
<div class="center"><a href="paiement.php" id="bouton2" ><b>PASSER AU PAIEMENT</b></div>
</div>
</form>

  </div>



    </div>
</body>

</html>