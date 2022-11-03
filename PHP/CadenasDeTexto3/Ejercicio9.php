<?php

    $frase = "esta cadEna tiEne escapEs en las vocales menos en la a";

    echo addcslashes($frase, 'eiouEIOU');

    echo ("<br><br>");

    echo stripslashes($frase);

?>