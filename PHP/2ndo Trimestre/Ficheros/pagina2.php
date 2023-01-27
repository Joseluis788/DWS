<?php

    if(isset($_REQUEST['enviar']))
    {
        $nombre = $_REQUEST['nombre'];
        $comentario = $_REQUEST['comentario'];
        $datos = @fopen("datos.txt" , 'a');
        fwrite($datos, "----------------------------<br>");
        fwrite($datos, "$nombre<br>");
        fwrite($datos, "$comentario<br>");
        echo("Los datos se han guardado correctamente:<br>
        ------------------------------------<br>
        $nombre<br>
        $comentario<br>
        ------------------------------------<br>");
        ?>
        <a href="pagina3.php">Ver Fichero</a>
        <?php
        fclose($datos);
       
    }
    else
    {
        header("Location: pagina1.php");
    }

?>