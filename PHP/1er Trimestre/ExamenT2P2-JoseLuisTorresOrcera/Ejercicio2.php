<?php

    $array = array(3,0,2,1);
    
    $array = ordenarArray($array,1);

    function ordenarArray ($array, $num = 1)
    {
        switch ($num) {
            case 1:
                sort($array);
                break;

            case 2:
                rsort($array);
                break;

            case 3:
                ksort($array);
                break;

            case 4:
                krsort($array);
                break;

            default:
                echo("Parámetro incorrecto");
                break;
        }

        return $array;
    }
?>