<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset ($_POST['num_ch'])
        ||!isset ($_POST['etage'])
        ||!isset ($_POST['surface'])
        ||!isset ($_POST['prix'])
        ||!isset ($_POST['gamme'])

        ||empty ($_POST['num_ch'])
        ||empty ($_POST['etage'])
        ||empty ($_POST['surface'])
        ||empty ($_POST['prix'])
        ||empty ($_POST['gamme'])
        ) {
        exit("Le formulaire est incomplet.");
    }

    // does room exist
    $request = $database->prepare('SELECT id FROM rooms c WHERE c.num_ch = :num_ch');
    $request->execute(['num_ch' => $_POST['num_ch']]);

    if ($request->fetch()) {
        exit("La chambre existe déjà.");
    }

    // register with database
    $request = $database->prepare('INSERT INTO rooms(num_ch, etage, surface, prix, gamme, dispo) VALUES(:num_ch, :etage, :surface, :prix, :gamme, :dispo)');
    $request->execute([
        'num_ch'=>$_POST['num_ch'],
        'etage'=>$_POST['etage'],
        'surface'=>$_POST['surface'],
        'prix'=>$_POST['prix'],
        'gamme'=>$_POST['gamme'],
        'dispo'=>1,
    ]);

    header('Location:/pageadmin.php');
    exit;

}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="../styles/index.css" />
        <title> Neptune Hotel </title>
        <!-- <link rel="stylesheet" href="styles/form.css"/> -->
</head>

<body>
    <?php require_once "../navbar.php" ?>
    <br>
    <br>
    <br>
        <div class="contact">
        <form action="" method="post">
            <div>
                <div>
                    <label for="num_ch">Numéro de Chambre *</label>
                </div>
                <div>
                    <input type="text" name="num_ch" placeholder="ex:101" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="etage">Etage de la chambre *</label>
                </div>
                <div>
                    <input type="text" name="etage" placeholder="ex:1,2..." required>
                </div>
            </div>
            <div>
                <div>
                    <label for="surface">Surface de la chambre *</label>
                </div>
                <div>
                    <input type="text" name="surface" placeholder="ex:2,10" required>
                </div>
            </div>
            <div>
                <label for="chambre-select">Gamme de la chambre</label><br>
                <select name="gamme" id="chambre-select">
                    <option value="">Faites votre choix</option>
                    <option value="Royale">Royale</option>
                    <option value="Confort">Confort</option>
                    <option value="Standard">Standard</option>
                </select>
            </div>
            <div>
                <div>
                    <label for="prix">Prix d'une nuit *</label>
                </div>
                <div>
                    <input type="text" name="prix" placeholder="ex:44,70" required>
                </div>
            </div>
            <br> </br>
                <input type="submit" value="Rajouter une chambre">
            </div>
        </form>
    </div>
</div>
</body>