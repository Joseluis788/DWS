<?php

    $cadena = eliminarPalabra("Hola amigo, que tal", 3);
    echo($cadena);

    function eliminarPalabra ($cadena, $num)
    {
        if ($num > str_word_count($cadena, 0))
            echo("El número de palabra introducido es incorrecto");
        else
        {
            $arrayCadena = explode(" ", $cadena);
            array_splice($arrayCadena, ($num-1), 1);
            $cadenaDevolver = implode(" ", $arrayCadena);
            return $cadenaDevolver;
        }
    }

?>