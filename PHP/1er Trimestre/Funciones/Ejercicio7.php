<?php

    printf("El cuadrado de 7 es: %d<br>", cuadrado(7));
    printf("El cubo de 7 es: %d", cubo(7));

    function cuadrado ($num)
    {
        $solucion = pow($num, 2);
        return $solucion;
    }

    function cubo ($num)
    {
        $solucion = pow($num, 3);
        return $solucion;
    }

?>