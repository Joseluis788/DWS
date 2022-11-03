<?php
    
    $frase = "Esta cadena tiene muchas letras";

    echo ("La posición de la primera ocurrencia de la letra 'a' es: ". stripos($frase, "a"). "<br>");
    echo ("La posición de la primera ocurrencia de la letra 'm' es: ". stripos($frase, "m"). "<br>");
    echo ("La posición de la primera ocurrencia de la palabra 'tiene' es: ". stripos($frase, "tiene"). "<br>");
    echo ("La posición de la primera ocurrencia de la letra 'a' es: ". strripos($frase, "a")."<br>");
    echo ("La frase desde la aparición de la palabra 'cadena' hasta el final es: ". substr($frase, stripos($frase, "cadena"))."<br>");

    echo ("<br><br>Partes de la cadena<br><br><br>");

    echo (substr($frase, 12)). "<br>";
    echo (substr($frase, 18, 6)). "<br>";
    echo (substr($frase, -6)). "<br>";
    echo (substr($frase, -26, 6)). "<br>";
    echo (substr($frase, 4, -7)). "<br>";
?>