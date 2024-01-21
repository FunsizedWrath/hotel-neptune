<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styles/presentation.css" />
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
        <img src="images/Facade Hotel tiara miramar.jpg" alt="hôtel">
    </div>
    <div class="menu">
        <div class="titre"> à l'Hôtel Neptune : Votre Oasis de Confort et d'Élégance </div>

Au cœur de la magnifique ville de Mauguio/Carnon, l'Hôtel Neptune émerge tel un joyau scintillant, prêt à vous offrir une expérience inoubliable. Dès que vous franchissez nos portes, une atmosphère chaleureuse et accueillante vous enveloppe, vous transportant dans un monde où le luxe et le service exceptionnel sont notre priorité.
<br>
<br>
<div class="titre">Nos Chambres : Élégance et Confort Réunis</div>

Chacune de nos chambres a été méticuleusement conçue pour créer un havre de paix, alliant design contemporain et touches classiques. Les vues imprenables depuis les fenêtres vous laisseront sans voix, et nos lits moelleux vous garantissent une nuit de sommeil réparatrice.
<br>
<br>
<div class="titre">Cuisine Raffinée au Restaurant Océanique</div>

Notre restaurant, l'Océanique, vous invite à un voyage culinaire exquis. Savourez des plats préparés avec des ingrédients locaux de première qualité, et laissez-vous emporter par une symphonie de saveurs préparée par notre talentueux chef.
<br>
<br>
<div class="titre">Le Personnel : Notre Plus Grande Fierté</div>

À l'Hôtel Neptune, nous croyons que la clé d'une expérience exceptionnelle réside dans notre équipe dévouée. Chacun de nos membres du personnel est soigneusement sélectionné pour sa passion, son professionnalisme et son désir de dépasser vos attentes. Attendez-vous à être accueilli avec un sourire sincère et à recevoir un service personnalisé à chaque étape de votre séjour.
<br>
<br>
<div class="titre">Événements Inoubliables dans Nos Espaces Uniques</div>

Que ce soit pour un mariage de rêve, une réunion d'affaires réussie ou toute autre célébration spéciale, nos espaces événementiels élégants sont prêts à accueillir vos moments mémorables. Laissez-nous prendre en charge les détails, pendant que vous profitez de chaque instant.
<br>
<br>
<div class="titre">À l'Hôtel Neptune, notre engagement envers l'excellence se reflète dans chaque détail. Nous sommes impatients de vous accueillir et de faire de votre séjour une expérience inoubliable. Venez découvrir la quintessence du luxe et du service personnalisé à l'Hôtel Neptune.
    </div>
</div>




</body>

</html>