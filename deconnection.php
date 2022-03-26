<?php
if (empty($_COOKIE["SessId"])) {
    header("location:index.php?notif=connexion");
} else {
    setcookie('SessId');

    header("location:index.php");
}
