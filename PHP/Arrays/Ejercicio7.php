<?php

    $contador = 0;

    for($i = 0; $i < 10; $i++)
    {
        $numeros[$i] = random_int(1,10);
        if ($numeros[$i] == 2)
        $contador++;

    }

    echo("Hay $contador doses en el array");

?>