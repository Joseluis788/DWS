<?php

    $a = 3;
    $b = 7;
    intercambiar($a,$b);
    echo ("Tras el intercambio son $a y $b");

    function intercambiar (&$a, &$b)
    {
        echo("Los números son $a y $b <br>");
        $aux = $a;
        $a = $b;
        $b = $aux;
    }

    // Otra versión con variables globales

    function intercambiar2 ()
    {
        global $a, $b; // Le digo al programa que fuera hay 2 variables que quiero usar, en este caso, a y b
        $aux = $a;
        $a = $b;
        $b = $aux;
    }

?>