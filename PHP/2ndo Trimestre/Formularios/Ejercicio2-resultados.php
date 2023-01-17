<?php

    if(isset($_REQUEST['enviar']))
    {
        if(!empty(trim($_REQUEST['busqueda'])))
        {
            if (!empty(trim($_REQUEST['password'])))
            {
                echo("La búsqueda realizada es: " . $_REQUEST['busqueda']);
                echo("<br>");
                echo("El sexo seleccionado es: " . $_REQUEST['sexo']);
                echo("<br>");
                echo("Los extras seleccionados son: ");
                foreach ($_REQUEST['extras'] as $extra) {
                    echo($extra . ", ");
                }
                echo("<br>");
                echo("La contraseña es: " . $_REQUEST['password']);
                echo("<br>");
                echo("El color seleccionado es: " . $_REQUEST['color']);
                echo("<br>");
                echo("Los idiomas seleccionados son: ");
                foreach ($_REQUEST['idiomas'] as $idiomas) {
                    echo($idiomas . ", ");
                }
            }
            else
            {
                echo("Error en la contraseña    , inténtelo de nuevo <br><br>");
                ?>
                <a href="Ejercicio2.php">Volver atrás</a>
                <?php
            }
        }
        else
        {
            echo("Error en la búsqueda, inténtelo de nuevo <br><br>");
            ?>
            <a href="Ejercicio2.php">Volver atrás</a>
            <?php
        }
    }
    else
    {
        header("Location: Ejercicio2.php");
    }



?>