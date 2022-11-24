<?php

    $contador = 0;

    for($i = 0; $i < 10; $i++)
    {
        $numeros[$i] = random_int(1,10);
        if ($numeros[$i] == 2)
        $contador++;

    }

    echo("Hay $contador doses en el array");

    // Otra manera de hacerlo

    function aleatorio ($min, $max)
    {
        // Creamos un array con un rango del minimo y máximo
        $valores = range($min, $max);
        // Mezclamos el array
        $shuffle($valores);
        // Devolvemos el que se encuentra en la posición 0
        return $valores(0);
    }

    for ($i = 0; $i <20; $i++)
    {
        echo ("El valor $i es: " . aleatorio(0,100));
    }
?>