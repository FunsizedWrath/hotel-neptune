<!doctype html>
<html lang="fr">

<head>
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
    <link href="styles/design.css" rel="stylesheet">
</head>

<body class="gamme">
<div class="all">
<div class="topnav">
        <div class="gauche">
        <a href="index.php">Accueil</a>
        <a href="page_reserve.php">Réserver ma Chambre</a>
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
        <a href="login.php"><img src="images/icone.png" alt="identifant"></a>
      </div>
    </div>
    </div>
    <br><br>
    <h1><b>Nos Gammes</h1></b>
    <br>

    <div class="chambre">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/chambre_double.png" alt="Chambre simple/double" width=600 lenght=300> &nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h2><b>Chambre Standard</b></h2>
                    <span>à partir 90€</span>
                </div>
                <div class="center">
                <p>
                    Nos chambres standards ont une vue sur une cour et un parking privatifs. Elles sont très calmes. Ces chambres sont neuves et climatisées. La salle de bain privative équipée d’une douche à l’italienne est séparée des WC. Vous trouverez à votre arrivée une bouteille d’eau et un plateau de courtoisie à votre disposition,coffre-fort et mini frigo.
                </p>
                <a href="standard.php" id="lien"> Voir nos chambres....</a>
                </div>
            </div>
        </div>
    </div>&nbsp;

    <div class="chambre">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/chambre_triple.png" alt="Chambre triple" width=600 lenght=300>&nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h2><b>Chambre Confort</b></h2>
                    <span>à partir 110€</span>
                </div>
                <div class="center">
                <p>
                    Nos chambres confort ont une vue sur notre parking, le port de plaisances et certaines d’entres elles sur les étangs et le coucher de soleil !
Ces chambres sont neuves et climatisées. La salle de bain privative équipée d’une douche à l’italienne est séparée des WC.
Vous trouverez à votre arrivée une bouteille d’eau et un plateau de courtoisie à votre disposition, coffre-fort et mini frigo.
                </p>
                <a href="confort.php" id="lien"> Voir nos chambres.... </a>
                </div>
            </div>
        </div>
    </div>&nbsp;

    <div class="chambre">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/chambre_royal.png" alt="Chambre Royal" width=600 lenght=300>&nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h2><b>Chambre Royal</b></h2>
                    <span>à partir 210€</span>
                </div>
                <div class="center">
                <p>
                    Nos chambres Royal ont une vue sur la mer, avec une grande terrasse, avec jacuzzi compris devant le coucher de soleil !
Ces chambres sont neuves et climatisées. La salle de bain privative équipée d’une douche à l’italienne est séparée des WC.
Vous trouverez à votre arrivée une bouteille d’eau et un plateau de courtoisie à votre disposition, coffre-fort et mini frigo.
Réductions sur le restaurant , petit déjeuner compris et piscine privée et sauna à votre disposition
                </p>
                <a href="royal.php" id="lien"> Voir nos chambres.... </a>
                </div>
            </div>
        </div>
    </div>&nbsp;


    <!--chambre simple/double; chambre triple; chambre royal:tout compris-->
</div>
</body>

</html>