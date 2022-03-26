<?php
require("./connect.php");

$mdpactu = $_POST["mdpactu"];
$mdpnouv1 = $_POST["mdpnouv1"];
$mdpnouv2 = $_POST["mdpnouv2"];

$sql = "Select codeUser from users
            Where mdp = SHA2(:mdp,256);";
$reponse = $bdd->prepare($sql);
$reponse->bindparam(":mdp", $mdpactu);
$user = $reponse->execute();
$user = $reponse->fetch(PDO::FETCH_ASSOC);
//si les 2 mots de passes identiques ne le sont pas 
//ou s'il n'y a pas d'utilisateur qui a ce mot de passe
if (($mdpnouv1 !== $mdpnouv2) or ($user == null)) {
    $message = "La modification du mot de passe à échouée, id de l'utilisateur :" + $_COOKIE["SessId"];
        ecrireFichierLog (1, $message);
    header("location:modifmdp.php?message=erreur");
} else {
    $sql1 = "Update users SET mdp = SHA2(:mdp,256) WHERE codeUser = :codeUser;";
    $reponse1 = $bdd->prepare($sql1);
    $reponse1->bindparam(":mdp", $mdpnouv1);
    $reponse1->bindparam(":codeUser", $_COOKIE["SessId"]);
    $update = $reponse1->execute();
    $message = "La modification du mot de passe validée, id de l'utilisateur :" + $_COOKIE["SessId"];
        ecrireFichierLog (0, $message);
    header("location:modifmdp.php?message=succesmodifmdp");
}
