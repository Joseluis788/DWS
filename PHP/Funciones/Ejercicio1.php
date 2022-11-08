<?php

    $interes = 5;
    echo ("<p><b>El interés actual es $interes%.</b></p>")
    printf ("<p>Si usted deposita 1000€ hoy sus ahorros crecerán a: %.2f", calculaCantidad(1000, $interes, 5));
    
    function calculaCantidad($cantidad, $interes, $tiempo)
    {
        for ($i = 0; $i < $tiempo; $i++)
        {
            $cantidadInteres = ($interes/100)*$cantidad;
            $cantidad = $cantidad + $cantidadInteres; 
        }
        return $cantidad
    }

?>