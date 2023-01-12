<?php

    $num1 = 7;
    $num2 = 3;

    echo(semisuma($num1, $num2));

    function semisuma($num1, $num2)
    {
        $solucion = ($num1 + $num2) / 2;
        return $solucion;
    }
?>