<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php

    include "conexion.inc.php";
    ?>
    <div class="container">
        <h1 class="text-primary">Noticias</h1>
        <br>
        <form action="#" method="post">
            <table class="table table-bordered table-striped">
                <tr class="table-warning">
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                    <th>Borrar</th>
                </tr>
                <?php

                    $resultados = $conexion->query("SELECT * FROM noticias ORDER BY fecha DESC");
                    $informacion = $resultados->fetch_object();
                    while($informacion != null)
                    {
                        echo("<tr class='table-primary'>");
                        echo("<td>$informacion->titulo</td>");
                        echo("<td>$informacion->texto</td>");
                        echo("<td>$informacion->categoria</td>");
                        echo("<td>$informacion->fecha</td>");
                        echo("<td>$informacion->imagen</td>");
                        echo("<td><input type='checkbox' name='borrar[]' value='$informacion->id'></td>");
                        echo("</tr>");
                        $informacion = $resultados->fetch_object();
                    }
                    
                ?>
            </table>
            <br>
            <input type="submit" name="enviar" value="Eliminar">
            <br><br>
            <a href="consultaInmobiliaria.php">Consultar noticias</a>
            <br><br>
            <a href="insertarNoticia.php">Insertar noticia</a>
        </form>
        <br>
        <?php
            if (isset($_REQUEST['enviar']) && !empty($_REQUEST['borrar']))
            {
                $borrar = implode(",", $_REQUEST['borrar']);
                $conexion->query("DELETE FROM noticias WHERE id IN ($borrar)");
                header("Location: eliminarNoticia.php");
            }
        ?>
    </div>
</body>
</html>