<?php

    $frase = "Esta frase está mal";

    $longitud = strlen($frase);

    $subFrase = substr($frase, strripos($frase, " "));

    echo ($subFrase);

?>