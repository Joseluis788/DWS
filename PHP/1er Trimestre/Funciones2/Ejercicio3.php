<?php

    printf("La media aritmetica de esos números es: %.2f", media(3,7,9,7,4,1,3,5,6,9,8,9));

    function media ()
    {
        $suma = 0;
        for ($i = 0; $i < func_num_args(); $i++)
        {
            $suma += func_get_arg($i);
        }

        return $suma / func_num_args();
    }

?>