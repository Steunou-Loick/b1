<?php
$serveur="localhost";
$nomdb="db_salac";
$user="adminer";
$mdp = "Azerty123";
try {
    $bdd = new PDO("mysql:host=$serveur; dbname=$nomdb;charset=utf8", $user, $mdp);
}
catch ( Exeption $e)
{// on afffiche l'erreur si échec 
    echo "Exeption reçue : ".$e->getManage()."\n";
    //TODO vérifier l'affichage d'erreur sur le serveur de production
} 

?>