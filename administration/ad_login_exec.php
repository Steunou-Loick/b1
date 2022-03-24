<?php 
session_start();
include("./fonctions.php");

// Le message
$message = "Line 1\r\nLine 2\r\nLine 3";
// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Envoi du mail
mail('boismond-j@saint-louis29.net', 'Mon Sujet', $message);

//print_r($_POST);
//var_dump($_POST);
$login=$_POST ["txtLogin"];
$pass=$_POST ["pwdMDP"];

require ("../connect.php");
//ecriture de la requete sql
$sql = "SELECT codeUser, login, nom, prenom
        FROM users
        WHERE login = :login
        AND mdp = :pass;";
//echo $sql
$reponse = $bdd -> prepare($sql);
$reponse->bindParam(':login', $login);
$reponse->bindParam(':pass', $pass);
$reponse->execute();
$user = $reponse -> fetch(PDO::FETCH_ASSOC);

//print_r($user);
//echo "test :".$user;
//traitement
If ($user == false){ //enregistrement inexistant
    ecrireFichierLog(2, "erreur login: $login");
    header("location:ad_login.php?notif=erreur"); //redirection pour verif !
}
else
{
    // ecrireFichierLog("succès de: $login");
    $_SESSION["user"]=$user;
    //print_r($_SESSION);
    header("location:ad_tableActualites.php");
}


?>