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

<body>
    <div class="container-fluid shadow-sm d-flex justify-content-between align-items-center header">
        <img style="height: 100px;" src="imagenes/logo.png" alt="Logo BookLoop">
        <div class="d-flex flex-column align-items-center">
            <a href="panelAdministrador.php"><button class="btn btn-light h-25"><i class="fa-solid fa-user"></i> ADMINISTRADOR</button></a>
            <a class="text-white" href="logOut.php">Cerrar Sesión</a>
        </div>
        

    </div>
    <div class="container-fluid fondo">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <h3 class="titulo">¡Reserva en tu restaurante favorita de manera sencilla!</h3>
                    <input type="search" placeholder="Buscar">
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="w-75" src="imagenes/Imagen_Comida.png" alt="Platos de comida">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid colorImportante">
        <div class="container d-flex justify-content-center pt-3">
            <h2 class="titulo">Algunas de nuestras recomendaciones</h2>
        </div>
        <div class="container mt-5">
            <div class="row">
                <?php
                include "Conexion.php";

                $productos = $conexion->query("SELECT * FROM productos");
                $informacion = $productos->fetch_object();
                $contador = 1;

                while ($informacion != NULL) {
                ?>
                    <div class="col-lg-4 d-flex justify-content-center divCartas">
                        <div class="card" style="width: 18rem;">
                            <div class="img-wrapper">
                                <img src="imagenes/<?php echo("$informacion->Imagen");?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo("$informacion->Nombre");?></h5>
                                <p class="card-text"><?php echo("$informacion->Descripcion");?></p>
                                <i class="fa-solid fa-location-dot" style="font-size: 100%;"> <?php echo("$informacion->Lugar");?></i>
                                <p></p>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>                    
                <?php
                    if($contador%3 == 0)
                    {
                        echo('<hr class=" opacity-50">');
                    }
                    $informacion = $productos->fetch_object();
                    $contador += 1;
                }
                ?>
            </div>
        </div> 
    </div>
    <div class="container-fluid header">
        <footer class="d-flex justify-content-sm-between justify-content-center flex-wrap align-items-center py-3 border-top border-dark-subtle">
            <p class="col-md-4 mb-0 text-muted justify-content-md-start justify-content-center">&copy; 2022 BookLoop, Inc</p>

            <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img class="bi me-2" width="100" height="100" src="imagenes/logo.png">
            </a>

            <ul class="nav col-md-4 justify-content-md-end justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands iconos fa-twitter"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands iconos fa-facebook"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands iconos fa-instagram"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands iconos fa-google-play"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands iconos fa-apple"></i></a></li>
            </ul>
        </footer>
    </div>
</body>

</html>