<?php
require("./connect.php");
$login = $_POST["login"];
$mdp = $_POST["pwdMDP"];
$verif_mdp = $_POST["pwdVMDP"];
$nom = $_POST["Nom"];
$prenom = $_POST["Prenom"];

if ($mdp !== $verif_mdp) {
    header("location:new_utilisateur.php?message=erreur");
} else {
    $sql = "INSERT INTO users(login, mdp, nom, prenom) values( :login, SHA2(:mdp,256), :nom, :prenom);";
    $reponse = $bdd->prepare($sql);
    $reponse->bindparam(":login", $login);
    $reponse->bindparam(":mdp", $mdp);
    $reponse->bindparam(":nom", $nom);
    $reponse->bindparam(":prenom", $prenom);
    try {
        $reponse->execute();
    } catch (PDOException $e) {
        echo "Erreur : $e";
        header("location:new_utilisateur.php?message=erreur");
    }
    header("location:index.php?page=connection");
}
