<?php

    $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

    echo("Con foreach: <br>");

    foreach($dias as $index => $value)
    {
        echo(($index+1) . ": ". $value. "<br>");
    }

    echo("<br><br>Con bucle for: <br>");

    for ($i = 0; $i < count($dias); $i++)
    {
        echo (($i+1) . ": ". $dias[$i]. "<br>");
    }

?>