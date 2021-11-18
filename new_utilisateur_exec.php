<?php
require("./connect.php");
$login = $_POST["login"];
$mdp = $_POST["pwdMDP"];
$verif_mdp = $_POST["pwdVMDP"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

if($mdp !== $verif_mdp){
    header("location:new_utilisateur.php?message=erreur");
}
else
{
    $sql = "INSERT INTO users(login, :mdp, :nom, :prenom) values(:login, :mdp, nom, :prenom) "
}
?>