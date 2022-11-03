<?php

    $email = "Joselu77776@gmail.com";

    $dominio = stristr($email, "@");
    $dominio = substr($dominio, 1);
    $nombre = stristr($email, "@", true);

    echo("El nombre del email es: ". $nombre. "<br>El dominio del email es: ". $dominio);

?>