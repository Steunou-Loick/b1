<?php
$serveur="localhost";
$nomdb="db_salac";
$user="adminer";
$mdp = "Azerty123";
try {
    $bdd = new PDO("mysql:host=$serveur; dbname=$nomdb;charset=utf8", $user, $mdp);
}
catch ( Exception $e)
{// on afffiche l'erreur si échec 
    echo "Exception reçue : ".$e->getManage()."\n";
    //TODO vérifier l'affichage d'erreur sur le serveur de production
} 

?>