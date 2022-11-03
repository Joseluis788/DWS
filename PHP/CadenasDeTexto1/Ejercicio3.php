<?php

    $usuario = "Joselu22";
    
    if (strlen($usuario) > 20)
    {
        echo ("El nombre de usuario debe de ser de 3 a 20 caracteres");
    }
    else if (strlen($usuario) < 3)
    {
        echo ("El nombre de usuario debe de ser de 3 a 20 caracteres");
    }
    else if (preg_match("/^[a-z A-Z 0-9 _\-]+$/", $usuario))
    {
        echo ("Bien hecho, buena cadena");
    }
    else
        echo ("Tu cadena contiene caracteres especiales no permitidos");


?>