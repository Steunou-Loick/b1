
<?php

//ptint_r($_GET);
$message = "";
$couleur="";
if(isset($_GET["message"])){
    $notif = $_GET["message"];
    switch($notif){
        case "erreur":
            $message = "Erreur de login ou de mot de passe";
            $couleur = "danger";
            break;
        case "connexion":
            $message = "Connexion réussie";
            $couleur = "success";
            break;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="text-center">
            <h3 class="text-primary">Page de connexion</h3>
            <hr>
    </div>
<?php if($message !== ""){
?>    
<div class="alert alert-<?php echo $couleur ?>" role="alert">
  <?php echo $message ?>
  </div>

<?php 
}
?>
</div>
<div class="container">
<h4 class ="text-secondary">Saisie les données de connexion</h4>
<form action="ad_login_exec.php" method="post"  >
    <div class="form-group">
        <label for="txtLogin">Login : </label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login">
    </div>
    <div class="form-group">
        <label for="pwdMDP">Mot de passe :</label>
        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary"><a href="/b23web/SALAC2021/index.php?page=connection_exec">Se connecter</a></button>
    <h6>Vous pouvez créer un compte si vous ne l'aviez pas<h6>
    <button type="submit" class="btn btn-primary"><a href="/b23web/SALAC2021/index.php?page=new_utilisateur">Créer un compte</a></button>
</form>
</div>
</div>
</body>
</html>