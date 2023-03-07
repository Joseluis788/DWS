<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLoop</title>
    <script src="https://kit.fontawesome.com/78556e7c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/bootstrap-icons.svg">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .hh {
            border: 1px red solid;
        }
    </style>
</head>

<body class="fondo">
    <?php

    if (!isset($_SESSION)) 
    {
        session_start();
    }
    if (strcmp($_SESSION['usuario'], "Admin") == 0) 
    {
    ?>
        <div class="container-fluid shadow-sm d-flex justify-content-center align-items-center header mb-3">
            <a href="adminPaginaPrincipal.php"><img style="height: 100px;" src="imagenes/logo.png" alt="Logo BookLoop"></a>
        </div>
        <h1 class="d-flex justify-content-center">Panel del Administración</h1>
        <div class="container">
            <form action="#" method="POST">
                <table class="mt-5 table table-bordered table-striped">
                    <tr class="table-warning">
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Lugar</th>
                        <th>Imagen</th>
                        <th>Borrar</th>
                    </tr>
                    <?php
                    if (!isset($_SESSION['registrado'])) {
                        session_start();
                    }
                    include "Conexion.php";

                    $consulta = $conexion->query("SELECT * FROM productos");

                    $informacion = $consulta->fetch_object();
                    while ($informacion != NULL) {
                        echo ("<tr class='table-primary'>");
                        echo ("<td>$informacion->Nombre</td>");
                        echo ("<td>$informacion->Descripcion</td>");
                        echo ("<td>$informacion->Lugar</td>");
                        echo ("<td>$informacion->Imagen</td>");
                        echo ("<td><input type='checkbox' name='borrar[]' value='$informacion->ID'></td>");
                        echo ("</tr>");
                        $informacion = $consulta->fetch_object();
                    }

                    ?>
                </table>
                <div class="d-flex justify-content-center">
                    <input class="mt-4 btn btn-danger btn-lg" type="submit" name="enviar" value="Eliminar">
                </div>
            </form>

            <?php
            if (isset($_REQUEST['enviar']) && !empty($_REQUEST['borrar'])) 
            {
                $borrar = implode(",", $_REQUEST['borrar']);
                $conexion->query("DELETE FROM productos WHERE id IN ($borrar)");
                header("Location: panelAdministrador.php");
            }
            ?>
        </div>
        <h1 class="m-5 d-flex justify-content-center">Añadir producto</h1>
        <div class="mb-5 container colorImportante border border-3 rounded-3">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="input-group m-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Nombre</span>
                    <input type="text" class="form-control" placeholder="Nombre del restaurante" name="nombre">
                </div>
                <div class="input-group m-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Descripción</span>
                    <input type="text" class="form-control" placeholder="Breve descripción" name="descripcion">
                </div>
                <div class="input-group m-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Lugar</span>
                    <input type="text" class="form-control" placeholder="Localidad donde se encuentra el restaurante" name="lugar">
                </div>
                <div class="input-group m-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Imagen</span>
                    <input type="file" class="form-control" name="imagen">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="m-3 btn btn-info btn-lg" type="submit" name="enviar2" value="Añadir">
                </div>
            </form>
            <?php
            // Compruebo si han pulsado el botón de añadir producto 
            if (isset($_REQUEST['enviar2'])) 
            {
                // Compruebo que los campos no estñan vacios
                if (trim(!empty($_REQUEST['nombre'])) && trim(!empty($_REQUEST['descripcion'])) && trim(!empty($_REQUEST['lugar'])) && !empty(is_uploaded_file($_FILES['imagen']['tmp_name']))) {
                    // Guardo todos los parametros en una variable
                    include "Conexion.php";
                    $nombre = $_REQUEST['nombre'];
                    $descripcion = $_REQUEST['descripcion'];
                    $lugar = $_REQUEST['lugar'];
                    $imagen = time() . $_FILES['imagen']['name'];
                    // Compruebo que se ha subido correctamente
                    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) 
                    {
                        // Comprobamos tipo 
                        $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
                        if (strstr($tipo, "image")) {

                            // Lo movemos
                            if (move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes\\" . $imagen)) 
                            {
                                $insertar = "INSERT INTO productos (Nombre,Descripcion,Lugar,Imagen) VALUES ('$nombre', '$descripcion', '$lugar', '$imagen')";

                                if ($conexion->query($insertar)) 
                                {
                                    echo ("<br><br>Noticia agregada correctamente");
                                    header("Location: panelAdministrador.php");
                                } else {
                                    echo ("<br><br>La noticia no ha podido ser agregada");
                                }
                            } else 
                            {
                                echo "no se pudo guardar";
                            }
                        } else 
                        {
                            // No es una imagen
                            echo "el fichero debe de ser una imagen";
                        }
                    } else 
                    {
                        echo 'error al subir el archivo';
                    }
                } else 
                {
                    echo ("<div class='d-flex justify-content-center'><p class='text-danger'>No puedes dejar ningún campo en blanco</p></div>");
                }
            }
            ?>
        </div>



    <?php
    }
    else
    {
        header("location:PaginaPrincipal.php");
    }

    ?>

</body>

</html>