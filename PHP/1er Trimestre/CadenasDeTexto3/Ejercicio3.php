<?php

    $texto = "gkklmnz fddfgpdfPp ññklttyyqqqd vmn";

    if (preg_match('/[aeiou]/i', $texto))
        echo ("Tu texto contiene vocales");
    else
        echo ("Tu texto no contiene vocales");

?>