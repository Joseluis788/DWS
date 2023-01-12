<?php

    $frase1 = "Hola 9";
    $frase2 = "Hola 10";

    echo ("Comparando las 2 frases<br>");
    if (strcasecmp($frase1, $frase2) < 0)
        echo ("$frase1 es menor que $frase2");
    else if (strcasecmp($frase1, $frase2) > 0)
        echo ("$frase1 es mayor que $frase2");
    else
        echo ("Las dos cadenas con iguales");


    echo ("<br><br><br>Comparando las 2 frases pero sólo 5 carácteres<br>");
    if (strncasecmp($frase1, $frase2, 5) < 0)
        echo ("$frase1 es menor que $frase2");
    else if (strncasecmp($frase1, $frase2 ,5) > 0)
        echo ("$frase1 es mayor que $frase2");
    else
        echo ("Las dos cadenas con iguales");


    echo ("<br><br><br>Comparando las 2 frases con el orden natural<br>");
    if (strnatcasecmp($frase1, $frase2) < 0)
        echo ("$frase1 es menor que $frase2");
    else if (strnatcasecmp($frase1, $frase2) > 0)
        echo ("$frase1 es mayor que $frase2");
    else
        echo ("Las dos cadenas con iguales");
    
    
?>