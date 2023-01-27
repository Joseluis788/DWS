<?php

    $leerDatos = @fopen("datos.txt", "r");
    echo(fread($leerDatos, 100000));
    fclose($leerDatos);

?>