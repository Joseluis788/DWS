<?php

    $direccionIP = "192.168.20.1";

    if (filter_var($direccionIP, FILTER_VALIDATE_IP))
        echo ("La dirección IP es correcta");
    else
        echo ("La dirección IP no es correcta");

?>