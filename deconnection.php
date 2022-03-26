<?php
if (empty($_COOKIE["SessId"])) {
    header("location:index.php?notif=connexion");
} else {
    $message = "Déconnexion de l'utilisateur  id : " + $_COOKIE["SessId"];
    ecrireFichierLog(0, $message);
    setcookie('SessId');

    header("location:index.php");
}
