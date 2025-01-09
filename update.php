<!DOCTYPE html>
<html lang="en">

<?php
    $bdd = new PDO ('mysql:host=localhost;dbname=meubles', 'root', '');

    $id = $_GET["id"];

    $requete="SELECT * from meuble WHERE id=$id;";

    $as=$bdd->query($requete);

    $res=$as->fetch();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="controllerupdate1.php?id=<?php echo $res["id"]; ?>" method="POST">

            <input type="text" name="upd_nom" placeholder="Remplir un nouveau nom" value="<?php echo $res['nom']; ?>">
            <input type="text" name="upd_prix" placeholder="Remplir un nouveau prix" value="<?php echo $res['prix']; ?>">
            <input type="submit" name="valider_update" value="Valider la modification">

        </form>
    </body>
</html>