<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        // Si se ha pulsado el boton enviar, se lleva al resultado del formulario, donde comprueba si hay errores o muestra los resultados
        if (isset($_REQUEST['enviar']))
        {
            ?>
            <h1 style="color:blue;">Subida de ficheros. Resultado del formulario</h1>
            <h3 style="font-style: italic;">Resultado de la inserción de nueva noticia</h3>
            <br><br>
            <?php
            // Compruebo si falta algún dato, si es así, muestro que dato falta.
            if (empty($_REQUEST['titulo']) || empty($_REQUEST['texto']) || !is_uploaded_file($_FILES['imagen']['tmp_name']) || empty($_FILES['imagen']['name']))
            {
                ?>
                <ul>
                    <?php
                    if (empty($_REQUEST['titulo']))
                        echo ("<li> Se requiere título de la noticia </li>");
                    if (empty($_REQUEST['texto']))
                        echo("<li> Se requiere texto de la noticia </li>");
                    if (empty($_FILES['imagen']['name']))
                        echo ("<li> No se ha seleccionado fichero </li>");
                    if (!is_uploaded_file($_FILES['imagen']['tmp_name']))
                        echo ("<li> No se ha subido fichero </li>");
                    ?>
                </ul>
                <?php
            }
            // Si no falta ningún dato, entra aquí
            else
            {
                // Guardo el tipo de fichero y los datos en variables propias
                $tipoFichero = mime_content_type($_FILES['imagen']['tmp_name']);
                $titulo = $_REQUEST['titulo'];
                $texto = $_REQUEST['texto'];
                $categoria = $_REQUEST['categoria'];
                // Compruebo que el fichero subido es una imagen
                if (strstr($tipoFichero, "image"))
                {
                    // Si es una imagen, la muevo a la carpeta img
                    $nombreFichero = time(). $_FILES['imagen']['name'];
                    if (@move_uploaded_file($_FILES['imagen']['tmp_name'], "img/".$nombreFichero))
                    {
                        // Y muestro todos los resultados
                        echo("La noticia ha sido recibida correctamente: <br><br>")
                        ?>
                        <ul>
                            <?php
                            echo("<li> Titulo: $titulo </li>");
                            echo("<li> Texto: $texto </li>");
                            echo("<li> Categoria: $categoria </li>");
                            echo("<li> Imagen: <a href='img/$nombreFichero' target='_blank'>Ver imagen en otra pestaña</a><br><br>");
                            echo("<img src= 'img/$nombreFichero'><br>");
                            echo("<a href='Ejercicio4.php'>Escribir otra noticia</a>");
                            ?>
                        </ul>
                        <?php 
                    }
                    // En caso contrario indico que no ha sido posible mover el fichero.
                    else
                    {
                        echo ("No se ha podido mover el fichero");
                    }

                }
                else
                {
                    echo("El fichero subido no es una imagen");
                }

            }


        }
        // Si no se ha pulsado el botón enviar, muestra el formulario
        else
        {
            ?>
            <h1 style="color: blue;">Subida de Ficheros</h1>
            <h3 style="font-style: italic;">Insertar nueva noticia</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" ENCTYPE="multipart/form-data">
                <label>Título: </label>
                <input type="text" name="titulo">
                <br><br><br>
                <label>Texto: </label>
                <br>
                <textarea name="texto" cols="30" rows="5"></textarea>
                <br><br><br>
                <label>Categoría: </label>
                <select name="categoria">
                    <option value="Promociones" selected>Promociones</option>
                    <option value="Trabajo">Trabajo</option>
                    <option value="Internacional">Internacional</option>
                </select>
                <br><br><br>
                <label>Imagen: </label>
                <input type="file" name="imagen">
                <br><br>
                <input type="submit" value="Insertar noticia" name="enviar">
            </form>
            <?php
        }
    ?>
</body>
</html>