<?php
    $prueba = array(1, array(21,22,23), 3, array(array(411,412), 42, array(431,432))); // Array de prueba
    recorrerArray($prueba, "", false); // Llamada a la funcion
    function recorrerArray ($array, $cadena, $escrito) // Funcion a la que le entra por parámetro el array, una cadena, y un boolean
    {
        for ($i = 0; $i < count($array); $i++) // Bucle for que se repite las mismas veces que tamaño tiene el array
        {
            if ($escrito == false) // Si escrito está en false, escribe la key (para que no se repita dos veces)
            {
                echo(key($array) . "--");
            }
            if (is_array($array[$i])) // Si existe un array dentro de la posicion del array, vuelve a llamar a la funcion
                recorrerArray($array[$i], ($cadena . "--"), true);
            else
                {
                    echo($cadena. ">". $array[$i]."<br>"); // Muestra lo que hay en el array
                }
            $escrito = false;
        }
    }

?>