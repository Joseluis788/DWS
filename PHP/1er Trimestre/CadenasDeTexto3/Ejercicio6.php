<?php

    $frase = "... Hola a todos ...";

    $frase1 = ltrim($frase, " .");
    $frase2 = rtrim($frase, " .");
    $frase3 = trim($frase, " .");

    echo ("Frase eliminando el principio: $frase1<br><br>");
    echo ("Frase eliminando el final: $frase2<br><br>");
    echo ("Frase eliminando el principio y el final: $frase3");

?>