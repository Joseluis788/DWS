<?php

    $colores = array
    (
        "Colores fuertes" => array(
            "Rojo" => 'FF0000',
            "Verde" => '00FF00',
            "Azul" => '0000FF',
        ),
        "Colores suaves" => array(
            "Rosa" => 'FE9ABC',
            "Amarillo" => 'FDF189',
            "Malva" => 'BC8F8F',
        )
    );

    if (in_array('FF88CC', $colores["Colores fuertes"]) || in_array('FF88CC', $colores["Colores suaves"]))
        echo("FF88CC se encuentra en el array");
    else
        echo("FF88CC no se encuentra en el array");

    echo("<br><br>");

    if (in_array('FF0000', $colores["Colores fuertes"]) || in_array('FF0000', $colores["Colores suaves"]))
        echo("FF0000 se encuentra en el array");
    else
        echo("FF0000 no se encuentra en el array");

?>