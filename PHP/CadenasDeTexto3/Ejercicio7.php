<?php

    $frase = "Cadena";

    $fraseRellenadaPrincipio = str_pad($frase, 20, "#", STR_PAD_LEFT);
    $fraseRellenadaFinal = str_pad($frase, 20, "#", STR_PAD_RIGHT);
    $fraseRellenadaBoth = str_pad($frase, 20, "#", STR_PAD_BOTH);

    echo ($fraseRellenadaPrincipio . "<br><br>");
    echo ($fraseRellenadaFinal . "<br><br>");
    echo ($fraseRellenadaBoth . "<br><br>");
?>