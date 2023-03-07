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
            <h1 class="d-flex justify-content-center <?php echo("$texto")?>">Crear cuenta</h1>
            <div class="container d-flex justify-content-center mt-5">
                <div class="col-3">

                </div>
                <div class="col-6 <?php echo ("$colorImportante") ?> p-3 rounded-3">
                    <form action="#" method="POST" id="crearCuenta">
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
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" id="password">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <input class="form-control" type="text" name="email" placeholder="Email" id="email">
                        </div>
                        <br><br>
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-info" onclick="validar()" value="Acceder" name="enviar">
                        </div>
                    </form>
                    <hr>
                    <?php
                    include "validarCreacionCuenta.php";
                    ?>
                    <div class="d-flex justify-content-center">
                        <a href="login.php">¿Tienes una cuenta? Inicia sesión aquí</a>
                    </div>
                </div>
                <div class="col-3">

                </div>

            </div>

            <script>
                // Nodos
                function validar() 
                {
                    let formulario = document.getElementById("crearCuenta");
                    let password = document.getElementById("password").value;
                    let email = document.getElementById("email").value;

                    let expPass = /^(?=.[A-Z])(?=.\d).{8,32}$/;
                    let expEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,3}$/
                }
            </script>
        </body>

<?php
    }
}
?>


</html>