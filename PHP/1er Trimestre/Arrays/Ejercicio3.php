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

    echo ("<table>");
    foreach ($colores as $tipo => $color) 
    {
        echo ("<tr>");
        echo ("<td>$tipo: </td>");
        foreach ($color as $nombreColor => $codigo) 
        {
            echo("<td style='background-color: $codigo;'> $nombreColor: $codigo</td>");
        }
        echo("</tr>");
    }
    echo ("</table>");

?>