<?php

    $pila = array("cinco" => 5, "uno" => 1, "cuatro" => 4, "dos" => 2, "tres" => 3);

    asort($pila);

    foreach ($pila as $numero => $valor) 
    {
        echo("$numero : $valor <br>");
    }

    echo("<br><br>");

    arsort($pila);

    foreach ($pila as $numero => $valor) 
    {
        echo("$numero : $valor <br>");
    }

    echo("<br><br>");

    ksort($pila);

    foreach ($pila as $numero => $valor) 
    {
        echo("$numero : $valor <br>");
    }

    echo("<br><br>");

    sort($pila);

    foreach ($pila as $numero => $valor) 
    {
        echo("$numero : $valor <br>");
    }

    echo("<br><br>");

    rsort($pila);

    foreach ($pila as $numero => $valor) 
    {
        echo("$numero : $valor <br>");
    }
?>