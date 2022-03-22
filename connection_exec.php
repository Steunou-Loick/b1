<?php
require("./connect.php");
$login = $_POST["login"];
$mdp = $_POST["mdp"];


    $sql = "Select codeUser, login, nom, prenom from users
            Where login = :login
            AND mdp = SHA2(:mdp,256);";
    $reponse = $bdd->prepare($sql);
    $reponse->bindparam(":login", $login);
    $reponse->bindparam(":mdp", $mdp);
    $user = $reponse->execute();
    $user = $reponse -> fetch(PDO::FETCH_ASSOC);

    if ($user == false)
    {
        // la connexion n'est pas valide
        header("location:index.php?page=connection&message=erreur");
    }
    else
    {
        //connexion valide 
        // session_start();
        // $_SESSION["newsession"]=$login;

        setcookie('SessId', $user["codeUser"], time()+ 3600); // valable 1h
        header("location:index.php?page=mon_profil");
    }