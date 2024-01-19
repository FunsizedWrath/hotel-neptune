<?php


include_once __DIR__ . '/../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset ($_POST['num_ch'])
        ||!isset ($_POST['etage'])
        ||!isset ($_POST['surface'])
        ||!isset ($_POST['prix'])

        ||empty ($_POST['num_ch'])
        ||empty ($_POST['etage'])
        ||empty ($_POST['surface'])
        ||empty ($_POST['prix'])
        ) {
        exit("Le formulaire est incomplet.");
    }

    // does room exist
    $request = $database->prepare('SELECT id FROM chambre c WHERE c.num_ch = :num_ch');
    $request->execute(['num_ch' => $_POST['num_ch']]);

    if ($request->fetch()) {
        exit("La chambre existe déjà.");
    }

    // register with database
    $request = $database->prepare('INSERT INTO chambre(num_ch, etage, surface, prix) VALUES(:num_ch, :etage, :surface, :prix)');
    $request->execute([
        'num_ch'=>$_POST['num_ch'],
        'etage'=>$_POST['etage'],
        'surface'=>$_POST['surface'],
        'prix'=>$_POST['prix'],
    ]);

    header('Location:/pageadmin.php');
    exit;

}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Neptune Hotel </title>
        <link rel="stylesheet" href="styles/form.css"/>
    </head>
    <body>
        <div class="container">
        <h1> Inscription </h1>
        <div class="topnav navigation text-center">
        <a href="index.php">
            Accueil</a>
         <a href="login.php">
            Connexion</a>
        </div>
        <br>
        <div class="contact">
        <form action="" method="post">
            <div>
                <div>
                    <label for="num_ch">Numero de Chambre *</label>
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
                    <input type="text" name="surface en m^2" placeholder="ex:2,10" required>
                </div>
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
                <input type="submit" value="rajouter une chambre">
            </div>
        </form>
    </div>
</div>
</body>