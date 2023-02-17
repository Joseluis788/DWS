<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión base de datos</title>
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
            <select name="filtrar">
                <option value="">Todas</option>
                <option value="='promociones'">Promociones</option>
                <option value="='costas'">Costas</option>
                <option value="='ofertas'">Ofertas</option>
            </select>
            <br><br>
            <input type="submit" value="Filtrar" name="filtro">
        </form>

        <table class="table table-bordered table-striped">
            <tr class="table-warning">
                <th>Título</th>
                <th>Texto</th>
                <th>Categoría</th>
                <th>Fecha</th>
                <th>Imagen</th>
            </tr>
            <?php
            if (isset($_REQUEST['filtro'])) {
                $filtro = $_REQUEST['filtrar'];
                $filtrado = "SELECT * FROM noticias WHERE categoria $filtro";
                $resultados = $conexion->query($filtrado);
            }
            else
            {
                $resultados = $conexion->query("SELECT * FROM noticias ORDER BY fecha DESC");
            }
            $informacion = $resultados->fetch_object();
            while ($informacion != null) {
                echo ("<tr class='table-primary'>");
                echo ("<td>$informacion->titulo</td>");
                echo ("<td>$informacion->texto</td>");
                echo ("<td>$informacion->categoria</td>");
                echo ("<td>$informacion->fecha</td>");
                echo ("<td>$informacion->imagen</td>");
                echo ("</tr>");
                $informacion = $resultados->fetch_object();
            }

            ?>
        </table>
        <br>
        <a href="insertarNoticia.php">Insertar Noticia</a>
        <br><br>
        <a href="eliminarNoticia.php">Eliminar Noticia</a>
    </div>
</body>

</html>