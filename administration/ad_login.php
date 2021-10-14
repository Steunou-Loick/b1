<?php
//ptint_r($_GET);
$message = "";
$couleur="";
if(isset($_GET["notif"])){
    $notif = $_GET["notif"];
    switch($notif){
        case "erreur":
            $message = "Erreur de login ou de mot de passe";
            $couleur = "danger";
            break;
        case "connexion":
            $message = "Il faut etre connecté pour pouvoir accéder aux pages d'administration";
            $couleur = "warning";
            break;
        case "deconnexion":
            $message = "Déconnexion réussie";
            $couleur = "success";
            break;
        }
        $message= "Erreur de login ou de mot de passe";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration du site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="text-center">
            <h2>Administration du site</h2>
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
<h4 class ="text-secondary">Saisie les données de connexion</h4>
<form action="ad_login_exec.php" method="post"  >
    <div class="form-group">
        <label for="txtLogin">Login : </label>
        <input type="text" class="form-control" id="txtLogin" name="txtLogin" placeholder="Entrez votre login">
    </div>
    <div class="form-group">
        <label for="pwdMDP">Mot de passe :</label>
        <input type="password" class="form-control" id="pwdMDP" name="pwdMDP" placeholder="Entrer votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
</body>
</html>