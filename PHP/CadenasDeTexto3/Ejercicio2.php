<?php

    $correo = "PepItoelDeLosPalotes@iesmurgi.org";

    $nombre = stristr($correo, "@", true);

    $dominio = stristr($correo, "@", false);


    echo ("Tu nombre es: ". $nombre);
    echo ("<br>Tu dominio es: ". $dominio);

?>