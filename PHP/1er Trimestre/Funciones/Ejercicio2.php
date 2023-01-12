<?php

    function habitantes ($pais, $capital="Madrid", $nHabitantes="muchos")
    {
        echo ("La capital de $pais es $capital y tiene $nHabitantes habitantes<br><br>");
    }

    echo (habitantes("España"));
    echo (habitantes("Portugal", "Lisboa"));
    echo (habitantes("Francia", "Paris", "6.000.000"));
?>