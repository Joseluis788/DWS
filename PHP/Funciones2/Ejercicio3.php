<?php

    printf("La media aritmetica de esos números es: %.2f", media(3,7,9,7,4,1,3,5,6,9,8,9));

    function media (...$numeros)
    {
        $contador = 0;
        $suma = 0;
        for ($i = 0; $i < count($numeros); $i++)
        {
            $contador++;
            $suma += $numeros[$i];
        }

        $solucion = $suma / $contador;
        return $solucion;
    }

?>