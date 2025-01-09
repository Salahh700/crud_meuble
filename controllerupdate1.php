<?php

    $id=$_GET["id"];

    $bdd = new PDO ('mysql:host=localhost;dbname=meubles', 'root', '');

    $upd_nom=$_POST["upd_nom"];
    $upd_prix=$_POST["upd_prix"];

    $requete_update="UPDATE `meuble` SET `nom`='$upd_nom',`prix`='$upd_prix' WHERE id=$id";
    $as=$bdd->query($requete_update);

    header("location: ./index.php");
?>