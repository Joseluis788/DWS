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

    foreach ($colores as $tipo => $color) 
    {
        echo ("$tipo: ");
        foreach ($color as $nombre => $codigo) 
        {
            echo("<tr style{background-color: $codigo;}> $nombre: $codigo</tr");
        }
        echo("<br><br>");
    }

?>