<pre>
<?php
    
    require("./est_connecte.php");
    require("../connect.php");
    $sql="SELECT NumInfo,
                TitreInfo, 
                 DateDebutParutionInfo AS DateDebut, 
                 DateFinParutionInfo AS DateFin,   
                 AfficherInfo
            FROM salac_news;";
    $reponse= $bdd->query($sql);
    $infos= $reponse ->fetchall (PDO::FETCH_ASSOC);
    // print_r($infos);
    $iconesAffiche= ["square", "check-square"];
    // si afficherInfo est 0 l'icone est square, si c'est 1 l'icone est check-square
    setlocale(LC_TIME,"fr_FR.UTF-8");

?>
</pre>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des actualités</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script>
         function soumettre(){
           if (confirm('Etes vous sûr de vouloir supprimer ? ')){
            document.getElementById("fSupp").submit();
          }
         }
    </script>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
         <span class="navbar-brand mb-0 h1">Administration SALAC</span>
         <form class="form-inline mb-0">
            <a href="ad_ajoutActualite.php">
              <button class="btn btn-outline-warning mr-1" id="menu-ajout" type="button">
                <i class="fa fa-plus-circle"></i>Ajout d'une news 
                </button>
                </a>
                <a href="ad_tableActualites.php">
                <button class="btn btn-outline-warning mr-1" id="menu-ajout" type="button">
                Suppresion, modification d'une news
                </button>
                </a>
                </form>
                <a href="ad_deconnexion_exec.php">
                  <i class="fas fa-sign-out-alt fa-2x text-danger"></i>
                  </a>
                  </nav>

<div class="container">
        <div class="text-center">
            <h2>Administration du site</h2>
            <h3 class="text-primary">Suppression, affichage ou modification des actualités</h3>
            <hr>
       </div>     
<h4 class="text-secondary">
  Liste des informations classées par date de parution à la date du 
  <?php echo strftime("%d %B %Y") ?>
</h4>
<table class="table table-striped table-bordered mt-4">
  <thead class="thead-dark">
  <tr>
  <th>Titre</th>
  <th>Date debut</th>
  <th>Date fin</th>
  <th>Afficher</th>
  <th>Suppr</th>
  <th>Modif</th>

  </thead>
  <tbody>
<?php
  foreach ($infos as $info)
    {
    $icone= $info["AfficherInfo"] == 0 ? "square": "check-square";
    $dateDebutFormat= strftime("%d %B %Y", strtotime($info ["DateDebut"]));
    $dateFinFormat= strftime("%d %B %Y", strtotime($info ["DateFin"]));
?>
        <tr>
        <td><?php echo $info["TitreInfo"]?></td>
        <td><?php echo $dateDebutFormat ?></td>
        <td><?php echo $dateFinFormat ?></td>
        <td class="text-center">
          <a href="ad_modifAffichage_exec.php?num=<?php  echo $info["NumInfo"]?> " >
           <i class="fas fa-<?php echo $icone ?> fa-2x text-success" ></i>
          </a>
        </td>
        <td class="text-center">
        <form action="ad_supActualite_exec.php" method="post" id="fSupp">
          <i class="fas fa-times-circle fa-2x text-danger" 
             onclick="soumettre()">
          </i>
          <input type="hidden" name="num" value="<?php echo $info["NumInfo"]?>">
          <!-- <input type="submit" value="supp"> -->
          </form>
        </td>
        <td class="text-center">
        <a href="ad_modifActualite.php?num=<?php echo $info["NumInfo"]?>">
          <i class="fas fa-pen-square fa-2x text-info"></i>
        </td>
    
        

        </tr>
<?php
  }
?>   

  </tbody>
</div>
</table>
</body>
</html>