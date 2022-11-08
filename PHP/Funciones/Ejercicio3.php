<?php

    echo (segundosDia(10));

    function segundosDia ($dias)
    {
        $segundos = 24*60*60*$dias;

        return $segundos;
    }

?>