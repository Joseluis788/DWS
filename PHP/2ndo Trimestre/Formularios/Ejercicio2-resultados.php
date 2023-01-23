<?php

    if(isset($_REQUEST['enviar']))
    {
        if(!empty(trim($_REQUEST['busqueda'])))
        {
            if (!empty(trim($_REQUEST['password'])))
            {
                if (!empty(trim($_REQUEST['comentario'])))
                {
                    echo("La búsqueda realizada es: " . $_REQUEST['busqueda']);
                    echo("<br>");
                    echo("El sexo seleccionado es: " . $_REQUEST['sexo']);
                    echo("<br>");
                    echo("Los extras seleccionados son: ");
                    if (isset($_REQUEST['extras']))
                    {
                        foreach ($_REQUEST['extras'] as $extra) {
                            echo($extra . ", ");
                        }
                    }
                    else
                        echo("Ninguno");
                    echo("<br>");
                    echo("La contraseña es: " . $_REQUEST['password']);
                    echo("<br>");
                    echo("El color seleccionado es: " . $_REQUEST['color']);
                    echo("<br>");
                    echo("Los idiomas seleccionados son: ");
                    foreach ($_REQUEST['idiomas'] as $idiomas) {
                        echo($idiomas . ", ");
                    }
                    echo("<br>");
                    echo("El comentario realizado es: " . $_REQUEST['comentario']);
                }
                else
                {
                    echo ("Error en el comentario, debe escribir algo <br><br>")
                    ?>
                    <a href="Ejercicio2.php">Volver atrás</a>
                    <?php
                }
            }
            else
            {
                echo("Error en la contraseña, debe escribir algo <br><br>");
                ?>
                <a href="Ejercicio2.php">Volver atrás</a>
                <?php
            }
        }
        else
        {
            echo("Error en la búsqueda, debe escribir algo <br><br>");
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