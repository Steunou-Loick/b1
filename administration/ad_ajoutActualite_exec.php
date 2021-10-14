<pre>
<?php
//include("./fonctions.php");
//require("est_connecte.php");
    //recuperation des donnees saisies dans le formulaire
    print_r($_POST); //premier point de controle 
    $titre = addslashes($_POST["text_titre"]);
    $dateDebut = $_POST["date_dateDebut"];
    $dateFin = $_POST["date_dateFin"];
    $contenu = $_POST["textarea_contenu"];
    $urlPhoto = $_POST["text_url"];
    $affiche = isset($_POST["checkbox_affiche"]) ? 1 : 0;
    $sql="INSERT INTO salac_news(TitreInfo, DateDebutParutionInfo, DateFinParutionInfo, ContenuInfo, UrlPhotoInfo, AfficherInfo ) 
          VALUES (:titre, :dateDebut, :dateFin, :contenu, :urlPhoto, :affiche);";
    
    //execution de la requete 
    require("../connect.php");
    $reponse=$bdd-> prepare($sql);
    $reponse->bindParam('titre', $titre);
    $reponse->bindParam(':dateDebut', $dateDebut);
    $reponse->bindParam(':dateFin', $dateFin);
    $reponse->bindParam(':contenu', $contenu);
    $reponse->bindParam(':urlPhoto', $urlPhoto);
    $reponse->bindParam(':affiche', $affiche);
    $reponse->execute();
    $actualite = $reponse -> fetchall(PDO::FETCH_ASSOC);
    echo $sql;//deuxieme point de control
    //redirection
   //header("location:ad_ajoutActualite.php"); 
?>
</pre>