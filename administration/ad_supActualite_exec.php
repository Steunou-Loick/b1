<?php
include("./fonctions.php");
require("./est_connecte.php");
//print_r($_POST);
$num = $_POST["num"];
//creation de la requete
$sql = "DELETE FROM salac_news
        Where NumInfo = $num;";
//echo $sql;

//excution de la requete 
require("../connect.php");
$reponse = $bdd -> prepare($sql);
$reponse->bindParam(':num', $num);
$reponse->execute();


$user = $_SESSION["user"];
$message = "suppression actualité n° $num par :" . $user["login"];
ecrireFichierLog(0, $message);
//redirection
header("location:ad_tableActualites.php");