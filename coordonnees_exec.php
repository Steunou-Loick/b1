<?php
    // print_r($_POST);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $lesResidences = $_POST["lesResidences"];
    $question = $_POST["question"];

    require("./connect.php");

    $sql = "INSERT INTO salac_prospect
            (nom, prenom, email, codeResidence, question)
            VALUES(:nom, :prenom, :email, :lesResidences, :question);";
$reponse = $bdd->prepare($sql);
$reponse->bindparam(":nom", $nom);
$reponse->bindparam(":prenom", $prenom);
$reponse->bindparam(":email", $email);
$reponse->bindparam(":lesResidences", $lesResidences);
$reponse->bindparam(":question", $question);
$reponse->execute();


//suppression de tous les enregistrements dont la date est supérieure à un an
$sql = " DELETE FROM salac_prospect 
        WHERE date <= curdate( ) - INTERVAL 1 YEAR;";
$bdd->exec($sql); //requête non préparée

header("location:index.php?page=Coordonnees&notif=creer");
?>