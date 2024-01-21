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
    <?php require_once "../navbar.php" ?>
        <br>
        <br>
        <br>


<div class="bloc">
    <form action="validation.php" method="post"></form>    <!-- a compléter -->
    <div class="center">
        <label for="date" >Date arrivée:</label> <br>
            <input type= "date" name= "date" id="barre"><br><br>

        <label for="date2" >Date départ: </label> <br>
            <input type="date" name= "date2" id="barre"><br><br>

        <label for="prix" > Prix maximum:</label> <br>
            <input type="number" name= "prix" id="barre"><br><br>

        <label for="surface">Surface:</label> <br>
            <input type= "number" name= "surface" id="barre"><br><br>
            <br>
        <button type="submit" id="bouton2" ><b>TROUVER MA CHAMBRE</b></button></div>

    </form>
    </div>




    </div>
</body>

</html>