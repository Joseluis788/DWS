<?php

    $dir = opendir(".");

    while(false !== ($fichero = readdir($dir)))
    {
        echo($fichero . ": ". filesize($fichero) . "bytes<br>");
    }

?>