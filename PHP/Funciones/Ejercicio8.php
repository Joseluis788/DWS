<?php


    printf("La sumatoria de 15 es: %d", sumatoria(15));

    function sumatoria ($num)
    {
        $sumatoria = 0;
        for ($i = 1; $i <= $num; $i++)
        {
            $sumatoria += $i;
        }
        return $sumatoria;
    }

?>