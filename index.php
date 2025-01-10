<!DOCTYPE html>

<?php
    $bdd = new PDO ('mysql:host=localhost;dbname=meubles', 'root', '');

    $requete="SELECT * from meuble;";

    $as=$bdd->query($requete);

    $res=$as->fetchAll();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Index</title>
</head>
    <body>
        <form action="controllercreate.php" method="POST">

            <input type="text" name="nom" placeholder="Ajouter un meuble">
            <input type="text" name="prix" placeholder="Ajouter un prix">
            <input type="submit" name="valider" value="valider" >

        </form>


        <div class="meubles">
        <?php
            foreach($res as $result)
                {
                    ?>
                        <div class="meuble">

                            <h1> <?php echo $result["nom"];  ?> </h1>
                            <p> <?php echo $result["prix"]; ?> </p>
                            <a href="./controllerdelete.php?id=<?php echo $result["id"]; ?>"><button onclick="return confirm('Êtes vous sûr de bien vouloir supprimer cet élément ?');">Supprimer</button></a>
                            <a href="./update.php?id=<?php echo $result["id"]; ?>"><button>Modifier</button></a>

                        </div>
                    <?php
                }



        ?>
        </div>
    </body>
</html>