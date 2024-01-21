<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/presentationcarnon.css" />
    <title>  Neptune Hotel  </title>
    <link rel="shortcut icon" href="images/Logo-Neptune-avec-rond-e1607450857665.ico" />
</head>

<body>
<div class="topnav">
        <div class="gauche">
        <a class="active" href="index.php">Accueil</a>
        <a href="page_reserve.php">Réserver ma Chambre</a>
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
    <div class="photo">
        <img src="images/thumb_Reflets_du_soleil_couchant_sur_la_plage.jpg" alt="hôtel">
    </div>
    <div class="menu">
        <div class="titre"> Bienvenue à Carnon : L'Éclat Méditerranéen à Proximité de Montpellier </div>

        Nichée sur la côte méditerranéenne, Carnon se présente comme une perle balnéaire étincelante, à quelques pas de Montpellier. Bienvenue dans un paradis où le soleil, le sable doré et la mer azur se fondent pour créer une toile de fond idyllique.
        <br>
        <br>
<div class="titre">Plages Infinites et Atmosphère Décontractée</div>
Les plages de sable fin de Carnon invitent à la détente et aux loisirs en bord de mer. Que vous soyez passionné de sports nautiques, de farniente au soleil ou de promenades romantiques au coucher du soleil, Carnon offre une atmosphère décontractée et ensoleillée qui vous séduira à coup sûr.
<br>
<br>
<div class="titre">Port de Plaisance : L'Esprit Nautique</div>

Le port de plaisance de Carnon, avec ses eaux tranquilles, est le point de départ idéal pour explorer la Méditerranée. Que vous soyez un amateur de voile chevronné ou un plaisancier débutant, les eaux cristallines et les installations modernes du port créent un environnement propice à l'aventure maritime.
<br>
<br>
<div class="titre">Gastronomie Méditerranéenne : Une Explosion de Saveurs</div>

Les ruelles pittoresques de Carnon regorgent de restaurants offrant une palette de saveurs méditerranéennes. Dégustez des fruits de mer frais, des plats locaux savoureux et des délices culinaires qui captivent les papilles. Chaque repas devient une célébration de la gastronomie locale, dans une ambiance détendue et conviviale.
<br>
<br>
<div class="titre">Animations et Événements en Bord de Mer</div>

Carnon vibre d'une énergie festive tout au long de l'année. Des marchés locaux colorés aux festivals animés, la ville offre une diversité d'activités qui séduiront les visiteurs de tous horizons. Imprégnez-vous de la culture locale et participez à des événements uniques qui font de Carnon une destination exceptionnelle..
<br>
<br>
<br>
<div class="titre">Carnon, où le charme méditerranéen rencontre la modernité, vous attend pour une escapade inoubliable. Découvrez la magie de cette station balnéaire et laissez-vous emporter par l'effervescence de la vie en bord de mer.
    </div>
</div>




</body>

</html>