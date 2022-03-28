<?php
//ptint_r($_GET);
$message = "";
$couleur = "";
if (isset($_GET["message"])) {
    $notif = $_GET["message"];
    switch ($notif) {
        case "erreur":
            $message = "Mdp est incorrect";
            $couleur = "danger";
            break;
        case "ajout":
            $message = "Utilisateur a été ajouté";
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
    <title>Crée un compte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h2>Crée un compte d'utilisateur</h2>
            <hr>
        </div>
        <?php if ($message !== "") { ?>
            <div class="alert alert-<?php echo $couleur ?>" role="alert">
                <?php echo $message ?>
            </div>

        <?php
        }
        ?>

        <!-- Test -->

    </div>
    <div class="container">
        <h4 class="text-secondary">Saissie les données de connexion</h4>
        <form action="new_utilisateur_exec.php" method="post">
            <div class="form-group">
                <label for="txtLogin">Saisir le login : </label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login" required>
            </div>
            <div class="form-group">
                <label for="pwdMDP">Saisir le mot de passe :</label>
                <input type="password" class="form-control" id="pwdMDP" name="pwdMDP" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" placeholder="Entrer votre mot de passe" required>
            </div>
            <div class="form-group">
                <label for="pwdVMDP">Répéter le mot de passe :</label>
                <input type="password" class="form-control" id="pwdVMDP" name="pwdVMDP" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" placeholder="Entrer votre mot de passe" required>
            </div>
            <div class="form-group">
                <label for="Nom">Saisir le nom :</label>
                <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Entrer votre nom" required>
            </div>
            <div class="form-group">
                <label for="Prenom">Saisir le prenom:</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Entrer votre prenom" required>
            </div>
            <div class="form-group">
                <label for="motSecret">Question secret: Quel est le prénom de votre grand-mère? </label>
                <input type="text" class="form-control" id="motSecret" name="motSecret" placeholder="Entrer votre reponse" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="nom@example.com">
            </div>
            <button type="submit" class="btn btn-primary">Créer son compte</button>
        </form>
    </div>
    </div>
</body>

</html>