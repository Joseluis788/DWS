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
</head>

<?php
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
}
if (!isset($_SESSION)) {
    session_start();
    if (isset($_SESSION['usuario'])) {
        if (strcmp($_SESSION['usuario'], "Admin" == 0)) {
            header("location:adminPaginaPrincipal.php");
        } else {
            header("location:PaginaPrincipal.php");
        }
    } else {
?>

        <body class="<?php echo ("$colorFondo") ?>">
            <div class="container-fluid shadow-sm d-flex justify-content-center align-items-center header mb-3">
                <a href="PaginaPrincipal.php"><img style="height: 100px;" src="imagenes/logo.png" alt="Logo BookLoop"></a>
            </div>
            <h1 class="d-flex justify-content-center <?php echo ("$texto") ?>">Inicio de sesión</h1>
            <div class="container d-flex justify-content-center mt-5">
                <div class="col-3">

                </div>
                <div class="col-6 <?php echo ("$colorImportante") ?> p-3 rounded-3">
                    <form action="#" method="post">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña">
                        </div>
                        <br><br>
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-info" type="submit" value="Acceder" name="enviar">
                        </div>
                    </form>
                    <hr>
                    <?php
                    include "validarLogin.php";
                    ?>
                    <div class="d-flex justify-content-center">
                        <a href="crearCuenta.php">¿No tienes cuenta? Crea una aquí</a>
                    </div>
                </div>
                <div class="col-3">

                </div>

            </div>
        </body>

<?php
    }
}
?>



</html>