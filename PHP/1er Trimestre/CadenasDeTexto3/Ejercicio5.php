<?php

    $frase = "Esto es una frAse cOn vArIAs vocalEs en mAyuscUlas";

    $fraseCambiada = strtr($frase, "aeiouAEIOU", "AEIOUaeiou");
    
    echo ("<b>La frase original es</b>: $frase<br><br>");
    echo ("<b>La frase con las vocales convertidas es</b>: $fraseCambiada");

?>