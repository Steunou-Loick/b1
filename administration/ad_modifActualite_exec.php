<?php
    print_r($POST);
    $num = $_POST["hdd_num"];
    $titre = $_POST["text_titre"];
    $dateDebut = $_POST["date_dateDebut"];
    $dateFin = $_POST["date_dateFin"];
    $contenu = $_POST["textarea_contenu"];
    $urlPhoto = $_POST["text_url"];
    $affiche = isset($_POST["checkbox_affiche"]) ? 1 : 0;

    $sql="UPDATE salac_news
        SET TitreInfo = :titre,
        DateDebutParutionInfo = :dateDebut,
        DateFinParutionInfo = :dateFin,
        ContenuInfo = :contenu,
        UrlPhotoInfo = :urlPhoto,
        AfficherInfo= :affiche
        WHERE NumInfo = :num;";
//echo $sql;
 //execution de la requete 
 require("../connect.php");
 $reponse=$bdd-> prepare($sql);
 $reponse->bindParam(':titre', $titre);
 $reponse->bindParam(':dateDebut', $dateDebut);
 $reponse->bindParam(':dateFin', $dateFin);
 $reponse->bindParam(':contenu', $contenu);
 $reponse->bindParam(':urlPhoto', $urlPhoto);
 $reponse->bindParam(':affiche', $affiche);
 $reponse->bindParam(':num', $num);
 $reponse->execute();

//redirection
header("location:ad_tableActualites.php");

?>