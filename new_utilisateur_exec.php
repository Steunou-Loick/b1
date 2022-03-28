<?php
require("./connect.php");
include("./fonction.php");
$login = $_POST["login"];
$mdp = $_POST["pwdMDP"];
$verif_mdp = $_POST["pwdVMDP"];
$nom = $_POST["Nom"];
$prenom = $_POST["Prenom"];
$email = $_POST["email"];
$mot_secret = $_POST["motSecret"];

if ($mdp !== $verif_mdp) {
    header("location:new_utilisateur.php?message=erreur");
} else {
    $sql = "INSERT INTO users(login, mdp, nom, prenom, email, mot_secret) values( :login, SHA2(:mdp,256), :nom, :prenom, email, :mot_secret);";
    $reponse = $bdd->prepare($sql);
    $reponse->bindparam(":login", $login);
    $reponse->bindparam(":mdp", $mdp);
    $reponse->bindparam(":nom", $nom);
    $reponse->bindparam(":prenom", $prenom);
    $reponse->bindparam(":email", $email);
    $reponse->bindparam(":mot_secret", $mot_secret);
    try {
        $reponse->execute();
    } catch (PDOException $e) {
        echo "Erreur : $e";
        $message = "Ajout d'un utilisateur a échoué";
        ecrireFichierLog (3, $message);
        header("location:new_utilisateur.php?message=erreur");
    }
    $message = "Création d'un nouvel utilisateur réussi";
        ecrireFichierLog (1, $message);
    header("location:index.php?page=connection");
}
