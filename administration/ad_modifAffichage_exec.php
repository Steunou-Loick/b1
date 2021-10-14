<?php
    //recuperation des parametres de l'url
   // print_r($_GET); //pramier point de controle 
    $num = $_GET["num"];
    
    //creation de la requete
    $sql="UPDATE salac_news
            SET AfficherInfo = 1 - AfficherInfo
            WHERE NumInfo = $num;";
    echo $sql;//deuxieme point de control
    //execution de la requete 
    require("../connect.php");
    $reponse = $bdd -> prepare($sql);
    $reponse->bindParam(':num', $num);
    $reponse->execute();

     //redirection
   header("location:ad_tableActualites.php"); 
?>