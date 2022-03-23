<?php

mail("boismond-j@saint-louis29.net", "test", "ceci est un test");
$message = "";
$couleur = "";
if (isset($_GET["message"])) {
    $notif = $_GET["message"];
    switch ($notif) {
        case "erreur":
            $message = "Erreur de login ou de mot de passe";
            $couleur = "danger";
            break;
        case "connexion":
            $message = "Connexion réussie";
            $couleur = "success";
            break;
        case "erreurco":
            $message = "Veuillez vous connecter";
            $couleur = "danger";
            break;
        case "deconnexion":
            $message = "Vous avez été déconnecté avec succès";
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
        <?php if ($message !== "") {
        ?>
            <div class="alert alert-<?php echo $couleur ?>" role="alert">
                <?php echo $message ?>
            </div>

        <?php
        }
        ?>
    </div>
    <div class="container">
        <h4 class="text-secondary">Saisie les données de connexion</h4>
        <form action="connection_exec.php" method="post">
            <div class="form-group">
                <label for="txtLogin">Login : </label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login" required>
            </div>
            <div class="form-group">
                <label for="pwdMDP">Mot de passe :</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrer votre mot de passe" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" required>
            </div>
            <button type="submit" class="btn btn-primary"><a>Se connecter</a></button>
            <h6>Ou créer un compte<h6>
                    <button type="submit" class="btn btn-primary"><a href="/b23web/SALAC2021/index.php?page=new_utilisateur">Créer un compte</a></button>
        </form>
    </div>
    <div class="form-group">
        <label for="pwdMDP">Mot de passe :</label>
        <input type="password" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" class="form-control" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
    </div>
</body>

</html>