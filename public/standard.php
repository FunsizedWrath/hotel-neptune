<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Nos chambres standard</title>
    <link href="styles/design.css" rel="stylesheet">
</head>

<body>
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
        <br><br>
        <h1><small><b>Nos chambres standard</small></h1></b>
        <br>


    <div class="chambre2">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/CH1B.jpg" alt="Chambre" width=650 lenght=300> &nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h3><u><b>Chambre de la Paix</u></b></h3>

                    <span> <b id="surface">8m²</b> <br><b>à partir de 96€</b></span>
                </div>
                <div class="description">
                <p>
                    Votre sommeil sera agréablement accompagné par les lignes épurées et les différentes nuances de bleu de cette chambre.
                    De la fenêtre latérale, vous pouvez accéder au balcon équipé, qui offre une vue latérale sur l'étang. <br> <br>
                    <i><b>Équipements de la chambre:</b></i><br> Lit double et deux lits simples, micro-ondes, frigo, vaisselle, armoire, lampe, four et télévision
                </p><br> <br>
                <a href="reservation.php" id="bouton"> <b>RESERVER</b></a>
                <br><br><br> <a href="#ancre" >Voir les accès de l'hôtel</a>
                </div>
            </div>
        </div>
    </div>&nbsp;


    <div class="chambre2">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/CH2B.jpg" alt="Chambre" width=650 lenght=300> &nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h3><u><b>Chambre des Brumes</u></b></h3>
                    <span> <b id="surface">8m²</b> <br><b>à partir de 105€</b> </span>
                </div>
                <div class="description">
                <p>

                    Avec des tons or et noir, cette chambre vous accueille dans un environnement exclusif et attentif afin de vous faire passer des moments agréables d’intimité et de relax absolu.
                    La chambre vous offre une vue splendide sur le port situé juste en face.  <br>
                    <br><br>
                    <i><b>Équipements de la chambre:</b></i><br> Lit double et deux lits simples, micro-ondes, frigo, vaisselle, armoire, lampe, four et télévision <br>
                </p><br> <br>
                <a href="reservation.php" id="bouton"> <b>RESERVER</b></a>
                <br><br><br> <a href="#ancre" >Voir les accès de l'hôtel</a>
                </div>
            </div>
        </div>
    </div>&nbsp;



    <div class="chambre2">
        <div class="d-flex">
            <div class="chambre-illustration">
                <img src="images/CH3B.jpg" alt="Chambre" width=650 lenght=300> &nbsp;
            </div>
            <div class="chambre-contenu">
                <div class="d-flex">
                    <h3><u><b>Chambre de la Flânerie</u></b></h3>
                    <span> <b id="surface">10m²</b> <br><b>à partir de 110€</b> </span>
                </div>
                <div class="description">
                <p>

                    Confortable et moderne, cette chambre aux couleurs mauves vous offre un réel espace de détente pour vous relaxer.
                    Elle dispose d'une agréable vue ainsi que d'une splendide salle de bain pleine de modernité. <br><br>
                    <i><b>Équipements de la chambre:</b></i><br> Lit double et deux lits simples, micro-ondes, frigo, vaisselle, armoire, lampe, four et télévision <br>
                </p><br> <br>
                <a href="reservation.php" id="bouton"> <b>RESERVER</b></a>
                <br><br><br> <a href="#ancre" >Voir les accès de l'hôtel</a>
                </div>
            </div>
        </div>
    </div>&nbsp; <br>
<div id="ancre" class="d-flex">
    <img src="images/piscine_privee.jpg" alt="piscine" width=250 lenght=100>
    <img src="images/salle_de_sport_privee.jpg" alt="salle de sport" width=250 lenght=100>
    <img src="images/sauna.jpg" alt="sauna" width=250 lenght=100>
    <img src="images/wifi.jpg" alt="wifi" width=250 lenght=100>
</div>
<div class="d-flex">
    <p> <b> Piscine</b> <br> - 5 euros l'accès <br> - Accès gratuit pour les clients <br> de chambre Royale </p>
       <p> <b>Salle de Sport </b>  <br> - 7 euros <br> - Accès gratuit pour les clients <br> de chambre Royale</p>
        <p> <b>Sauna</b> <br> - 10 euros <br> - Accès gratuit pour les clients <br> de chambre Royale</p>
       <p> <b>Wifi gratuit garanti</b> </p>
</div>
</div>
</body>

</html>