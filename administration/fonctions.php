<?php
    function ecrireFichierLog ($codeType, $message)
    {
        $types = ["INFO", "WARNING", "ERROR", "ALERT"];
        $fichier = "./logs/adm".date("ym").".log";
        $ligne = date("d/m/Y H:i:s")."\t".
            $types[$codeType]."\t".
            $_SERVER["REMOTE_ADDR"]."\t".
            $_SERVER["PHP_SELF"]."\t".
            $_SERVER["QUERY_STRING"]."\t".
            $message."\n";

        file_put_contents($fichier, $ligne, FILE_APPEND);
        //FE_APPEND : ecrire en fILin de fichier 
    }
?>