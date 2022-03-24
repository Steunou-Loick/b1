<?php
if (empty($_COOKIE["SessId"])) {
    header("Location:index.php?page=connection&message=erreurco");
} else {
    require("./connect.php");
    $sql = "Select nom, prenom from users
    Where codeUser = :code;";
    $reponse = $bdd->prepare($sql);
    $reponse->bindparam(":code", $_COOKIE["SessId"]);
    $user = $reponse->execute();
    $user = $reponse->fetch(PDO::FETCH_ASSOC);
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
    <form action="index.php?page=modifmdp" method="post">
        <div class="text-center">
            <h3 class="text-primary">Profil</h3>
            <hr>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="Photos/profil.png" alt="profil">
                    </div>
                    <div class="col">
                        Prenom : <?php echo $user["prenom"] ?><br> Nom : <?php echo $user["nom"] ?>
                    </div>
                    <div class="col">
                        <h6>Modifier votre mot de passe<h6>
                            <button type="submit" class="btn btn-primary"><a>Modifier</a></button>
                    </div>
                </div>

            </div>
    </body>

    </html>
<?php
}
?>
