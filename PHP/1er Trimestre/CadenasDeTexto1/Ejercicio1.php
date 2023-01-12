<?php

    $palabra1 = "Ramon";
    $palabra2 = "Mamon";

    $rima = substr($palabra1, -3);

    if (str_ends_with($palabra2, $rima))
    {
        echo ("Tu palabra rima perfectamente");
    }
    else if (str_ends_with($palabra2, substr($palabra1, -2)))
    {
        echo ("Tu palabra rima un poco");
    }
    else 
        echo ("Tu palabra no rima");

?>