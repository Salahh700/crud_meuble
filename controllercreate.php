<?php

    $bdd = new PDO ('mysql:host=localhost;dbname=meubles', 'root', '');

    $nom=$_POST["nom"];
    $prix=$_POST["prix"];


    $requete="INSERT INTO `meuble`(`nom`, `prix`) VALUES ('$nom' , $prix);";
    
    $as=$bdd->query($requete);

    header("location: ./index.php");


?>