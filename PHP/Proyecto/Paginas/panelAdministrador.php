<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLoop</title>
    <script src="https://kit.fontawesome.com/78556e7c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>

    <?php
     // If que comprueba si existe una Cookie iniciada, la compara y guarda en una variable el color de la misma para luego añadirselo a la clase de fondos
    if (isset($_COOKIE['color'])) {
        if (strcmp($_COOKIE['color'], "oscuro")) {
            $colorFondo = "fondo";
            $colorImportante = "colorImportante";
            $texto = "text-black";
        } else {
            $colorFondo = "fondoOscuro";
            $colorImportante = "colorImportanteOscuro";
            $texto = "text-white";
        }
    } else {
        $colorFondo = "fondo";
        $colorImportante = "colorImportante";
        $texto = "text-black";
    }
    // If que comprueba si existe una sesión iniciada y si no la inicia
    if (!isset($_SESSION)) {
        session_start();
    }
    // If que comprueba si la sesión iniciada se corresponde a la del Admin
    if (strcmp($_SESSION['usuario'], "Administrador") == 0) {
    ?>
        <body class="<?php echo ("$colorFondo") ?>">
        <!-- Div que contiene el header -->
        <div class="container-fluid shadow-sm d-flex justify-content-center align-items-center header mb-3">
            <a href="adminPaginaPrincipal.php"><img style="height: 100px;" src="../imagenes/logo.png" alt="Logo BookLoop"></a>
        </div>
        <h1 class="d-flex justify-content-center <?php echo("$texto")?>">Panel del Administración</h1>
        <div class="container">
            <!-- Formulario que tiene dentro una tabla con los productos -->
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
                    // Include con la conexión a la base de datos
                    include "../php/Conexion.php";
                    // Realizco la consulta
                    $consulta = $conexion->query("SELECT * FROM productos");
                    // el fetch
                    $informacion = $consulta->fetch_object();
                    // Y el bucle while que va mostrando la información en pantalla
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
                    <!-- Botón para eliminar los seleccionados -->
                    <input class="mt-4 btn btn-danger btn-lg" type="submit" name="enviar" value="Eliminar">
                </div>
            </form>

            <?php
            // If que comprueba si se ha pulsado el botón de eliminar y borrar los productos seleccionados
            if (isset($_REQUEST['enviar']) && !empty($_REQUEST['borrar'])) {
                $borrar = implode(",", $_REQUEST['borrar']);
                $conexion->query("DELETE FROM productos WHERE id IN ($borrar)");
                header("Location: panelAdministrador.php");
            }
            ?>
            <!-- Div que contiene un formulario para añadir productos -->
        </div>
        <h1 class="m-5 d-flex justify-content-center <?php echo("$texto")?>">Añadir producto</h1>
        <div class="mb-5 container <?php echo ("$colorImportante")?> border border-3 rounded-3">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="input-group my-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Nombre</span>
                    <input type="text" class="form-control" placeholder="Nombre del restaurante" name="nombre">
                </div>
                <div class="input-group my-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Descripción</span>
                    <input type="text" class="form-control" placeholder="Breve descripción" name="descripcion">
                </div>
                <div class="input-group my-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Lugar</span>
                    <input type="text" class="form-control" placeholder="Localidad donde se encuentra el restaurante" name="lugar">
                </div>
                <div class="input-group my-3">
                    <span class="input-group-text bg-info-subtle fw-bold">Imagen</span>
                    <input type="file" class="form-control" name="imagen">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="m-3 btn btn-info btn-lg" type="submit" name="enviar2" value="Añadir">
                </div>
            </form>
            <?php
            // Compruebo si han pulsado el botón de añadir producto 
            if (isset($_REQUEST['enviar2'])) {
                // Compruebo que los campos no estñan vacios
                if (trim(!empty($_REQUEST['nombre'])) && trim(!empty($_REQUEST['descripcion'])) && trim(!empty($_REQUEST['lugar'])) && !empty(is_uploaded_file($_FILES['imagen']['tmp_name']))) {
                    // Guardo todos los parametros en una variable
                    include "../php/Conexion.php";
                    $nombre = $_REQUEST['nombre'];
                    $descripcion = $_REQUEST['descripcion'];
                    $lugar = $_REQUEST['lugar'];
                    $imagen = time() . $_FILES['imagen']['name'];
                    // Compruebo que se ha subido correctamente
                    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                        // Comprobamos tipo 
                        $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
                        if (strstr($tipo, "image")) {

                            // Lo movemos
                            if (move_uploaded_file($_FILES['imagen']['tmp_name'], "../imagenes\\" . $imagen)) {
                                $insertar = "INSERT INTO productos (Nombre,Descripcion,Lugar,Imagen) VALUES ('$nombre', '$descripcion', '$lugar', '$imagen')";

                                if ($conexion->query($insertar)) {
                                    echo ("<br><br>Noticia agregada correctamente");
                                    header("Location: panelAdministrador.php");
                                } else {
                                    echo ("<br><br>La noticia no ha podido ser agregada");
                                }
                            } else {
                                echo "no se pudo guardar";
                            }
                        } else {
                            // No es una imagen
                            echo "el fichero debe de ser una imagen";
                        }
                    } else {
                        echo 'error al subir el archivo';
                    }
                } else {
                    echo ("<div class='d-flex justify-content-center'><p class='text-danger'>No puedes dejar ningún campo en blanco</p></div>");
                }
            }
            ?>
        </div>



    <?php
    } else {
        // Si no es Admin lo redirijo a la página principal
        header("location:PaginaPrincipal.php");
    }

    ?>

</body>

</html>