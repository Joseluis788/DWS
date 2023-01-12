<?php

    $frase = "Bienvenidos a la aventura de aprender PHP en 30 horas";

    $fraseCentral = substr($frase, 11, 18);

    echo ($fraseCentral."<br>");

    $posicionPHP = stripos($frase, "PHP");

    echo ("La posición de la palabra PHP es: ".$posicionPHP."<br>");

    $fraseReemplazada = str_replace("aventura", "<b>misión</b>", $frase);

    echo ($fraseReemplazada);

?>