<?php

    $dir = opendir(".");

    while(false !== ($fichero = readdir($dir)))
    {
        if (is_dir($fichero)) 
        {
            echo "Entrando en Directorio: $fichero<br>";
            if (strpos($fichero, ".")===false) 
            {
                recorre($directorio."/".$fichero, $nivel+1);
                chdir($directorio);
            }
        } else
            echo "$fichero: " .filesize($fichero).'bytes <br>';}
            closedir($dir);
    

?>