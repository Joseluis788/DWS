<?php

    printf("La media aritmetica de esos números es: %.2f", media(3,7,9,7,4,1,3,5,6,9,8));

    function media (...$numeros)
    {
        $contador = 0;
        $suma = 0;
        foreach($numeros as &$valor)
        {
            $suma += $valor;
            $contador++;
        }

        $solucion = $suma / $contador;
        return $solucion;
    }

?>