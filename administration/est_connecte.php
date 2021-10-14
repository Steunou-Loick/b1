<?php
    session_start();
    if( ! isset($_SESSION["user"])){
        ecrireFichierLog(1, "Accès à une page admninistration sans authentification");
        header("location:ad_login.php?notif=erreur");
    }
?>