<!DOCTYPE html>
<html lang="en">

<?php
    $bdd = new PDO ('mysql:host=localhost;dbname=meubles', 'root', '');

    $requete="SELECT * from meuble;";

    $as=$bdd->query($requete);

    $res=$as->fetchAll();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="controllerupdate1.php" method="POST">

            <input type="text" name="update_nom" placeholder="Remplir un nouveau nom">
            <input type="text" name="update_prix" placeholder="Remplir un nouveau prix" value=" <?php echo $result['nom']; ?>">
            <input type="submit" name="valider_update" value="valider_update" value=" <?php echo $result['prix']; ?>" >

        </form>
    </body>
</html>