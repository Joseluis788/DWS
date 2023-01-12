<?php

    $alumnos = ["Raul", "Jose", "Antonio", "Jesus", "Juanjo"];

    $alumnos3 = array_slice($alumnos, 0, 3);
    $contador = 1;

    foreach ($alumnos3 as $valor)
    {
        echo ($contador. ": ". $valor. "<br>");
        $contador++;
    }
    echo("<br><br>");
    $alumnos2 = array_splice($alumnos, 0, 3);

    $contador = 1;
    foreach ($alumnos as $valor)
    {
        echo ($contador. ": ". $valor. "<br>");
        $contador++;
    }

?>