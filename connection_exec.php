<?php
require("./connect.php");
include("./fonction.php");
$login = $_POST["login"];
$mdp = $_POST["mdp"];

     $to      = 'personne@example.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
    $sql = "Select codeUser, login, nom, prenom, email from users
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
        try {
            ecrireFichierLog (1, "La connexion n'est pas valide pour l'utilisateur login");
        }
        catch (Exception $e) {
            header("location:index.php?page=accueil");
        }
         header("location:index.php?page=connection&message=erreur");
    }
    else
    {
        //connexion valide 
        // session_start();
        // $_SESSION["newsession"]=$login;

        $message = "La connexion est validée";
        ecrireFichierLog (0, $message);
        setcookie('SessId', $user["codeUser"], time()+ 3600); // valable 1h
        header("location:index.php?page=mon_profil");
    }