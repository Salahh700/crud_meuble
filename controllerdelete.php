<?php
    $id = $_GET["id"];

    $bdd = new PDO('mysql:host=localhost;dbname=meubles', 'root', '');

    $requete = "DELETE FROM meuble WHERE id = $id";
    
    $as = $bdd->query($requete);

    header("Location: ./index.php");
    ; // Assurez-vous de terminer le script après la redirection
?>
