<?php

    $frase = "CadenaOriginal";
    $fraseRepetida = "";

    for ($i = 0; $i < strlen($frase); $i++)
    {
        $letraRepetir = (substr($frase, $i, 1));

        $fraseRepetida = $fraseRepetida.$letraRepetir.$letraRepetir;
    }

    echo ($frase."<br><br>");
    echo ($fraseRepetida);

?>