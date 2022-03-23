<?php
$message = "";
$couleur = "";
if (isset($_GET["message"])) {
    $notif = $_GET["message"];
    switch ($notif) {
        case "erreur":
            $message = "Les mots de passes ne sont pas identiques";
            $couleur = "danger";
            break;
        case "succesmodifmdp":
            $message = "Succès de la modification de votre mot de passe";
            $couleur = "success";
    }
}
if (empty($_COOKIE["SessId"])) {
    header("Location:index.php?page=connection&message=erreurco");
} else {
    require("./connect.php");
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Modification mot de passe</title>
    </head>

    <body>
        <div class="text-center">


            <div class="container">
                <div class="text-center">
                    <h3 class="text-primary">Modifier votre mot de passe</h3>
                    <hr>
                </div>
                <?php if ($message !== "") { ?>
                    <div class="alert alert-<?php echo $couleur ?>" role="alert">
                        <?php echo $message ?>
                    </div>

                <?php
                }
                ?>
                <form action="modifmdp_exec.php" method="post">
                    <div class="form-group">
                        <label for="mdpactu">Saisir votre mot de passe actuel : </label>
                        <input type="password" class="form-control" id="mdpactu" name="mdpactu" placeholder="Entrez votre mdp actuel" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" required>
                    </div>
                    <div class="form-group">
                        <label for="mdpnouv">Nouveau mot de passe :</label>
                        <input type="password" class="form-control" id="mdp" name="mdpnouv1" placeholder="Entrer votre mot de passe" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" required>
                    </div>
                    <div class="form-group">
                        <label for="mdpnouv">Saisir à nouveau votre mot de passe :</label>
                        <input type="password" class="form-control" id="mdp" name="mdpnouv2" placeholder="Entrer votre mot de passe" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><a>Modifier son mot de passe</a></button>
                </form>
            </div>
        </div>
        </div>
    </body>

    </html>
<?php
}
?>