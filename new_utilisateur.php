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
            <h3 class="text-primary">Page de connexion</h3>
            <hr>
    </div>

<!-- Test -->

</div>
<h4 class ="text-secondary">Saisie les données de connexion</h4>
<form action="new_utilisateur_exec.php" method="post"  >
    <div class="form-group">
        <label for="txtLogin">Saisissez votre login : </label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login">
    </div>
    <div class="form-group">
        <label for="pwdMDP">Saisissez votre mot de passe :</label>
        <input type="password" class="form-control" id="pwdMDP" name="pwdMDP" placeholder="Entrer votre mot de passe">
    </div>
    <div class="form-group">
        <label for="pwdVMDP">Saissiser votre mot de passe :</label>
        <input type="password" class="form-control" id="pwdVMDP" name="pwdVMDP" placeholder="Entrer votre mot de passe">
    </div>
    <div class="form-group">
        <label for="Nom">Saissiser votre nom :</label>
        <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
        <label for="Prenom">Saissiser votre prenom:</label>
        <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Entrer votre prenom">
    </div>

    <button type="submit" class="btn btn-primary">Crée</button>
</form>
</div>
</body>
</html>
