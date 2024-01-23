<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $request = $database->prepare('UPDATE rooms SET num_ch=:num_ch, etage=:etage, surface=:surface, prix=:prix, gamme=:gamme WHERE id = :id');
    $request->execute([
        'id'=> $_GET['id'],
        'num_ch'=>$_POST['num_ch'],
        'etage'=>$_POST['etage'],
        'surface'=>$_POST['surface'],
        'prix'=>$_POST['prix'],
        'gamme'=>$_POST['gamme'],
    ]);

    header('Location: room_management.php');
    exit;
}

$request = $database->prepare('SELECT * FROM rooms r WHERE r.id = :id');
$request->execute(['id' => $_GET['id']]);

if (empty($room = $request->fetch())) {
    echo("Chambre non trouvée.");
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="../styles/index.css" />
        <title> Neptune Hotel </title>
        <!-- <link rel="stylesheet" href="../styles/form.css"/> -->
</head>

<body>
<?php require_once "../navbar.php" ?>
<br>
<br>
<br>
    <h1> Modification de la chambre n°<?php echo $room['num_ch']; ?> </h1>
    <br>
    <div class="contact">
    <form action="" method="post">
        <div>
            <div>
                <label for="num_ch">Numéro de Chambre *</label>
            </div>
            <div>
                <input type="text" name="num_ch" value="<?php echo $room['num_ch'] ?>" required>
            </div>
        </div>
        <div>
            <div>
                <label for="etage">Etage de la chambre *</label>
            </div>
            <div>
                <input type="text" name="etage" value="<?php echo $room['etage'] ?>" required>
            </div>
        </div>
        <div>
            <div>
                <label for="surface">Surface de la chambre *</label>
            </div>
            <div>
                <input type="text" name="surface" value="<?php echo $room['surface'] ?>" required>
            </div>
        </div>
        <div>
            <label for="chambre-select">Gamme de la chambre</label><br>
            <select name="gamme" id="chambre-select">
                <option value="Royale" <?php echo $room['gamme'] == 'Royale' ? 'selected' : '' ?>>Royale</option>
                <option value="Confort" <?php echo $room['gamme'] == 'Confort' ? 'selected' : '' ?>>Confort</option>
                <option value="Standard" <?php echo $room['gamme'] == 'Standard' ? 'selected' : '' ?>>Standard</option>
            </select>
        </div>
        <div>
            <div>
                <label for="prix">Prix d'une nuit *</label>
            </div>
            <div>
                <input type="text" name="prix" value="<?php echo $room['prix'] ?>" required>
            </div>
        </div>
        <br>
        <div class="submit-buttons">
            <input type="submit" value="Enregistrer les modifications">
            <button class="delete" formaction="delete_room.php?id=<?php echo  $_GET['id']?>"><b>Supprimer la chambre</b></button>
        </div>
        </div>
    </form>
</div>
</div>
</body>