<?php
    $numeros = range(0,29);

    /* foreach (range(0,29) as $numeros){

    } */
    reset($numeros);
    end($numeros);
    for ($i = 0; $i < count($numeros); $i++)
    {
        $mode = current($numeros);
        $key = key($numeros);
        echo($key . "= ". $mode . "<br>");
        prev($numeros);
    }

?>