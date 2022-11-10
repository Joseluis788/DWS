<?php

    $cadena = "Esto es un texto en negrita";

    echo(textoNegrita($cadena));

    function textoNegrita ($cadena)
    {
        $solucion = "<b>".$cadena."<b>";
        return $solucion;
    }

?>