<?php

    $UE = array
    (
        "Alemania" => "Berlín",
        "España" => "Madrid",
        "Portugal" => "Lisboa",
        "Francia" => "París",
        "Bélgica" => "Bruselas",
    );

    foreach ($UE as $pais => $capital) 
    {
        echo ("La capital de $pais es $capital<br>");
    }

    echo("<br><br>Ordenados según la capital<br><br>");
    asort($UE);

    foreach ($UE as $pais => $capital) 
    {
        echo ("La capital de $pais es $capital<br>");
    }

    echo("<br><br>Ordenados según el país<br><br>");
    ksort($UE);

    foreach ($UE as $pais => $capital) 
    {
        echo ("La capital de $pais es $capital<br>");
    }
?>