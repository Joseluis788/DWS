<?php

    printf("La media aritmetica de esos números es: %.2f", media(3,7,9,7,4,1,3,5,6,9,8));

    function media (...$numeros)
    {
        return array_sum($numeros) / count($numeros);
    }

?>