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
    <link rel="stylesheet" href="../css/Transicion.css">
</head>

<body>
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
    }
    // If que comprueba si existe una sesión iniciada y si no la inicia
    if (!isset($_SESSION)) {
        session_start();
    }
    // If que comprueba si la sesión iniciada se corresponde a la del Admin
    if (strcmp($_SESSION['usuario'], "Administrador") == 0) {
    ?>
        <!-- Div que contiene el header -->
        <div class="container-fluid shadow-sm d-flex justify-content-between align-items-center header">
            <div class="DivTransition"><img style="height: 100px;" src="../imagenes/logo.png"Logo BookLoop"></div>
            <div class="d-flex flex-column align-items-center">
                <a href="panelAdministrador.php"><button class="btn btn-light h-25"><i class="fa-solid fa-user"></i> ADMINISTRADOR</button></a>
                <a class="text-white" href="../php/logOut.php">Cerrar Sesión</a>
            </div>
        </div>
         <!-- Div que contiene la primera parte visual de la página -->
        <div class="container-fluid <?php echo("$colorFondo")?>">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <h3 class="titulo <?php echo("$texto")?>">¡Reserva en tu restaurante favorita de manera sencilla!</h3>
                        <input type="search" placeholder="Buscar">
                    </div>
                    <!-- Imagen de comida -->
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img class="w-75" src="../imagenes/Imagen_Comida.png" alt="Platos de comida">
                    </div>
                </div>
            </div>
        </div>
        <!-- Div que contiene los restaurantes recomendados en cards -->
        <div class="container-fluid <?php echo("$colorImportante")?>">
            <div class="container d-flex justify-content-center pt-3">
                <h2 class="titulo <?php echo("$texto")?>">Algunas de nuestras recomendaciones</h2>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <?php
                    // Include que contiene la conexión a la base de datos
                    include "../php/Conexion.php";
                    // Query a la base de datos con los productos
                    $productos = $conexion->query("SELECT * FROM productos");
                    $informacion = $productos->fetch_object();
                    $contador = 1;
                    // While que muestra toda la información de la base de datos y un contador que cada múltiplo de 3 printea un hr
                    while ($informacion != NULL) {
                    ?>
                        <div class="col-lg-4 d-flex justify-content-center divCartas">
                            <div class="card" style="width: 18rem;">
                                <div class="img-wrapper">
                                    <img src="../imagenes/<?php echo ("$informacion->Imagen"); ?>" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo ("$informacion->Nombre"); ?></h5>
                                    <p class="card-text"><?php echo ("$informacion->Descripcion"); ?></p>
                                    <i class="fa-solid fa-location-dot" style="font-size: 100%;"> <?php echo ("$informacion->Lugar"); ?></i>
                                    <p></p>
                                    <a href="#" class="btn btn-primary">Reservar</a>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($contador % 3 == 0) {
                            echo ('<hr class=" opacity-50">');
                        }
                        $informacion = $productos->fetch_object();
                        $contador += 1;
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Div que contiene el footer de la página -->
        <div class="container-fluid header">
            <footer class="d-flex justify-content-sm-between justify-content-center flex-wrap align-items-center py-3 border-top border-dark-subtle">
                <div class="col-md-4 mb-0 justify-content-md-start justify-content-center d-flex flex-column">
                    <p class="text-muted">&copy; 2022 Jose Luis Torres Orcera</p>
                    <form action="../php/eleccionColor.php" method="POST" onchange="enviarColor()" name="formularioColor">
                        <select name="color" class="rounded rounded-3 bg-warning-subtle">
                            <option selected disabled>Color</option>
                            <option value="original">Original</option>
                            <option value="oscuro">Oscuro</option>
                        </select>
                    </form>
                </div>

                <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img class="bi me-2" width="100" height="100" src="../imagenes/logo.png">
                </a>

                <ul class="nav col-md-4 justify-content-md-end justify-content-center">
                    <li class="nav-item"><a href="https://twitter.com/FokkoXD" class="nav-link px-2 text-muted" target="_blank"><i class="fa-brands iconos fa-twitter"></i></a></li>
                    <li class="nav-item"><a href="https://www.facebook.com/Google/?locale=es_ES" class="nav-link px-2 text-muted" target="_blank"><i class="fa-brands iconos fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="https://instagram.com/fokko27?igshid=ZDdkNTZiNTM=" class="nav-link px-2 text-muted" target="_blank"><i class="fa-brands iconos fa-instagram"></i></a></li>
                    <li class="nav-item"><a href="mailto:jtoroc298@g.educaand.es" class="nav-link px-2 text-muted"><i class="fa-solid fa-envelope iconos"></i></a></li>
                </ul>
            </footer>
        </div>
        <script>
            // Funcion para enviar el Color
            function enviarColor() {
                document.formularioColor.submit();
            }
        </script>

    <?php
    } else {
        // Si no se es administrador se redirige a la página principal
        header("location:PaginaPrincipal.php");
    }

    ?>

</body>

</html>