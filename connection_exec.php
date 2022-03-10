<?php
require("./connect.php");
$login = $_POST["login"];
$mdp = $_POST["mdp"];


    $sql = "Select login, nom, prenom from users
            Where login = :login
            AND mdp = SHA2(:mdp,256);";
    $reponse = $bdd->prepare($sql);
    $reponse->bindparam(":login", $login);
    $reponse->bindparam(":mdp", $mdp);
    $user = $reponse->execute();

    if ($user == false)
    {
        header("location:index.php?page=connection&message=erreur");
    }
    else
    {
        session_start();
        $_SESSION["newsession"]=$login;
        header("location:index.php?page=mon_profil");
    }