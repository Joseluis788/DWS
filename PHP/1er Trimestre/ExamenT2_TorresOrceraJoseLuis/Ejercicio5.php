<?php

    $tlf = "654 65 65 65";

    $tlf1 = substr($tlf, 0,1);  

    if (preg_match('/^[6-9]$/', $tlf1))
        if (preg_match('/^[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}+$/', $tlf))
            echo("holi");
        else
            echo("adios");
    else
        echo("jope");

?>