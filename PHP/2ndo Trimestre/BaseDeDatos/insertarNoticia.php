<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Noticia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php


    ?>
    <div class="container">
        <h1 class="text-primary">Inserción de nueva noticia</h1>
        <?php
        if (isset($_REQUEST['enviar'])) {
            if (empty(trim($_REQUEST['titulo'])))
                echo ("<p class='text-danger'>Hay que rellenar el titulo");
            if (empty(trim($_REQUEST['texto'])))
                echo ("<p class='text-danger'>Hay que rellenar el texto");
        }
        ?>
        <div class="container border">
            <form action="#" method="post" ENCTYPE="multipart/form-data">
                <br>
                <label class="h6">Título:* </label>
                <input type="text" name="titulo">
                <br><br>
                <label class="h6">Texto:*</label>
                <br>
                <textarea name="texto" cols="30" rows="5"></textarea>
                <br><br>
                <label class="h6">Categoría: </label>
                <select name="categoria">
                    <option value="promociones" selected>Promociones</option>
                    <option value="costas">Costas</option>
                    <option value="ofertas">Ofertas</option>
                </select>
                <br><br>
                <label class="h6">Imagen: </label>
                <input type="file" name="imagen">
                <br><br>
                <input type="submit" name="enviar">
                <br><br>
            </form>
        </div>
        <?php
        if (isset($_REQUEST['enviar']) && !empty(trim($_REQUEST['titulo'])) && !empty(trim($_REQUEST['texto'])) && !empty(is_uploaded_file($_FILES['imagen']['tmp_name']))) {
            include "conexion.inc.php";
            $texto = $_REQUEST['texto'];
            $titulo = $_REQUEST['titulo'];
            $categoria = $_REQUEST['categoria'];
            $fecha = date('y-m-d');
            $imagen = time() . $_FILES['imagen']['name'];
            echo($imagen);

            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {

                //comptobamos tipo 
                $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
                if (strstr($tipo, "image")) {

                    //lo movemos
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], "img\\" . $imagen)) {
                        //se movio
                        // y se mostra

                    } else {
                        echo "no se pudo guardar";
                    }
                } else {
                    //no es una imagen
                    echo "el fichero debe de ser una imagen";
                }
            } else {
                echo 'error al subir el archivo';
            }

            $insertar = "INSERT INTO noticias (titulo,texto,categoria,fecha,imagen) VALUES ('$titulo', '$texto', '$categoria', '$fecha', '$imagen')";

            if ($conexion->query($insertar)) {
                echo ("<br><br>Noticia agregada correctamente");
            } else {
                echo ("<br><br>La noticia no ha podido ser agregada");
            }
        }
        ?>
        <br><br>
        <a href="consultaInmobiliaria.php">Consultar Noticias</a>
        <br><br>
        <a href="eliminarNoticia.php">Eliminar Noticia</a>
    </div>

</body>

</html>