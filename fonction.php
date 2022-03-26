<?php
    function ecrireFichierLog ($codeType, $message)
    {
        $types = ["INFO", "WARNING", "ERROR", "ALERT"];
        $fichier = "./logs/adm".date("y")."-".date("m").".log";
        $ligne = date("d/m/Y H:i:s")."\t".
            $types[$codeType]."\t".
            $_SERVER["REMOTE_ADDR"]."\t".
            $_SERVER["PHP_SELF"]."\t".
            $message."\t    ".
            $_SERVER["QUERY_STRING"]."\t".
            $_SERVER ["HTTP_USER_AGENT"]."\n";
        file_put_contents($fichier, $ligne, FILE_APPEND); 
        //FILE_APPEND: ecrire en fin de fichier
    }
?>