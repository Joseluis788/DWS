<?php
    /* Variables */
    $num = 45;
    $formato = 7;

    /* switch que elige el formato */

    switch($formato)
    {
        case 1: 
            formato1($num);
            break;
        case 2: 
            formato2($num);
            break;
        case 3: 
            formato3($num);
            break;
        case 4: 
            formato4($num);
            break;
        case 5: 
            formato5($num);
            break;
        case 6: 
            formato6($num);
            break;
        default:
            echo("Formato incorrecto!!");
            break;
    }

    /* Funciones que muestran los formatos */

    function formato1 ($num)
    {
        printf("El valor pasado es %d en decimal", $num);
    }

    function formato2 ($num)
    {
        printf("El valor pasado es %x en hexadecimal", $num);
    }

    function formato3 ($num)
    {
        printf("El valor pasado es %X en Hexadecimal", $num);
    }

    function formato4 ($num)
    {
        printf("El valor pasado es %o en octal", $num);
    }

    function formato5 ($num)
    {
        printf("El valor pasado es %e en notacion exponencial", $num);
    }

    function formato6 ($num)
    {
        printf("El valor pasado es %b en binario", $num);
    }

?>