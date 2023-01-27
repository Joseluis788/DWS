<?php

    $lectura = @fopen("../Formularios/Ejercicio3.php", 'r');

    if (!$lectura)
    {
        die("ERROR: No se ha podido abrir el fichero");
    }

    $guardar = @fopen("fich_salida.txt", 'w');

    while (!feof($lectura)) 
    {
        fwrite($guardar, fgets($lectura) . "<br>");
    }

    $fichero = "fich_salida.txt";
    echo(filesize($fichero) . " bytes");

    fclose($lectura);
    fclose($guardar);

?>