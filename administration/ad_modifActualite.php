<?php
  //print_r($_GET);
  include("./fonctions.php");
  require("./est_connecte.php");
  $num = $_GET["num"];
  require("../connect.php");
    $sql="SELECT TitreInfo, 
                 DateDebutParutionInfo AS DateDebut, 
                 DateFinParutionInfo AS DateFin,
                 ContenuInfo,
                 UrlPhotoInfo as Url,   
                 AfficherInfo
            FROM salac_news
            WHERE NumInfo = $num;";
    
    $reponse = $bdd -> query($sql);
    $info = $reponse -> fetch(PDO::FETCH_ASSOC); //fetch - 1 enregistrement au plus
    //print_r($info);
    $checked = $info["AfficherInfo"] == 1 ? "checked" : "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h2>Administration du site</h2>
            <h3 class="text-primary">Modification de l'actualité n°<?php echo $num ?></h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="text-muted">Données concernant la nouvelle actualité</h4>
                <form action="ad_modifActualite_exec.php" method="post">
                    <input type="hidden"
                            name="hdd_num"
                            value="<?php echo $num ?>"
                    >
                    <div class="form-group">
                        <label for="text_titre">Titre de l'actualité</label>
                        <input type="text" name="text_titre" 
                        class="form-control" 
                        placeholder="Entrer le titre de l’actualité" 
                        value="<?php echo $info["TitreInfo"]?>" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="date_dateDebut">Date début parution</label>
                            <input type="date" 
                            class="form-control" 
                            name="date_dateDebut"
                            value="<?php echo $info["DateDebut"]?>"
                            required>
                        </div>
                        <div class="form-group col-6">
                            <label for="date_dateFin">Date fin parution</label>
                            <input type="date" 
                            class="form-control" 
                            name="date_dateFin"
                            value="<?php echo $info["DateFin"]?>"
                            required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea_contenu">Texte de l'actualité</label>
                        <textarea class="form-control" 
                        name="textarea_contenu" 
                        cols="50"
                        rows="5" 
                        placeholder="Entrer contenu de l'actualité" 
                        required><?php echo $info["ContenuInfo"]?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text_url">URL de la photo</label>
                        <input type="text"
                        class="form-control"
                        name="text_url" 
                        
                        placeholder="Entrer l'url de la photo" 
                        value="<?php echo $info["Url"]?>" required>
                    </div>
                    <div class="checkbox_affiche form-group">
                        <label>
                        <input 
                        type="checkbox" 
                        name="checkbox_affiche" 
                        <?php echo $checked ?>
                        > 
                        Affichage de l'actualité
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-warning">Effacer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>