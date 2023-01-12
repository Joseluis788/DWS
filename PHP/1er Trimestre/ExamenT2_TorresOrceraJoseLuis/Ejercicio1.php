<?php

    /* Variables */
    $cad1 = "Hola9";
    $cad2 = "Hola10";
    $ncaracteres = 4;
    $modo = 4;

    /* Switch para comprobar que modo se elige */
    switch ($modo)
    {
        case 1 : 
            modo1($cad1, $cad2);
            break;
        case 2:
            modo2($cad1, $cad2);
            break;
        case 3:
            modo3($cad1, $cad2);
            break;
        case 4:
            modo4($cad1, $cad2, $ncaracteres);
            break;
    }


    /* Funciones que realizan las comparaciones de las cadenas */

    function modo1 ($cad1, $cad2)
    {
        if (strcmp($cad1, $cad2) < 0)
            echo($cad1. " es menor que ". $cad2);
        else if (strcmp($cad1, $cad2) == 0)
            echo($cad1 . " es igual a ". $cad2);
        else
            echo($cad1. " es mayor que ". $cad2);
    }

    function modo2 ($cad1, $cad2)
    {
        if (strcasecmp($cad1, $cad2) < 0)
            echo($cad1. " es menor que ". $cad2);
        else if (strcasecmp($cad1, $cad2) == 0)
            echo($cad1 . " es igual a ". $cad2);
        else
            echo($cad1. " es mayor que ". $cad2);
    }

    function modo3 ($cad1, $cad2)
    {
        if (strnatcmp($cad1, $cad2) < 0)
            echo($cad1. " es menor que ". $cad2);
        else if (strnatcmp($cad1, $cad2) == 0)
            echo($cad1 . " es igual a ". $cad2);
        else
            echo($cad1. " es mayor que ". $cad2);
    }

    function modo4 ($cad1, $cad2, $ncaracteres)
    {
        if (strncmp($cad1, $cad2, $ncaracteres) < 0)
            echo($cad1. " es menor que ". $cad2);
        else if (strncmp($cad1, $cad2, $ncaracteres) == 0)
            echo($cad1 . " es igual a ". $cad2);
        else
            echo($cad1. " es mayor que ". $cad2);
    }
?>