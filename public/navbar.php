<?php
?>

<div class="topnav">
    <div class="gauche">
    <a class="active" href="/index.php">Accueil</a>
    <a href="/reservation/page_reserve.php">Réserver ma Chambre</a>
    <a href="/listechambre.php">Liste des Chambres</a>
    <a href="/contact.php">Nous Contacter</a>
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
    <a href="/login.php"><img src="images/icone.png" alt="identifant"></a>
    </div>
</div>