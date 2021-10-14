<!DOCTYPE html>
<html lang="fr">
<pre>
<?php
//include("./fonctions.php");
//require("./est_connecte.php");
?>
</pre>
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
            <h3 class="text-primary">Ajout d'une nouvelle actuali</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-12">
            <h4 class="text-muted">Données concernant la nouvelle actualité</h4>
            <form action="ad_ajoutActualite_exec.php" method="post">
                <div class="form-group">
                    <label for="text_titre">Titre de l'actualité</label>
                    <input type="text" name="text_titre" 
                    class="form-control" 
                    placeholder="Entrer le titre de l’actualité" required>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="date_dateDebut">Date début parution</label>
                        <input type="date" 
                        class="form-control" 
                        name="date_dateDebut"
                        required>
                    </div>
                    <div class="form-group col-6">
                        <label for="date_dateFin">Date fin parution</label>
                        <input type="date" 
                        class="form-control" 
                        name="date_dateFin"
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
                     required></textarea>
                </div>
                <div class="form-group">
                    <label for="text_url">URL de la photo</label>
                    <input type="text"
                     class="form-control"
                      name="text_url" 
                      placeholder="Entrer l'url de la photo" required>
                </div>
                <div class="checkbox_affiche form-group">
                    <label><input type="checkbox" name="checkbox_affiche"> Affichage de l'actualité</label>
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
</body>
</html>