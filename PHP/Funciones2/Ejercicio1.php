<?php

    $a = 3;
    $b = 7;
    intercambiar($a,$b);

    function intercambiar ($a, $b)
    {
        echo("Los números son $a y $b <br>");
        $aux = $a;
        $a = $b;
        $b = $aux;
        echo ("Tras el intercambio son $a y $b");
    }

?>