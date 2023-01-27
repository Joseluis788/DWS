<?php

    $visitas = fopen("visitas.txt" , "r");

    $contador = fgets($visitas, 8);
    echo("Esta es la visita número: " . $contador);
    $contador += 1;
    fclose($visitas);

    $visitas = fopen("visitas.txt" , "w");
    fwrite($visitas, $contador);
    fclose($visitas);
?>