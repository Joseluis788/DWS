<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuessMaster</title>
    <script src="https://kit.fontawesome.com/78556e7c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilos/styles.scss">
    <link rel="stylesheet" href="../estilos/styles.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="icon" type="image/x-icon" href="../imagenes/GueesMaster Logo.png">
    <link rel="stylesheet" href="../estilos/style.css">
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <link rel="stylesheet" href="../estilos/style2.css">
    <link rel="stylesheet" href="../estilos/ionicons.min.css">
    <style>
        .hh{
            border: red 1px solid;
        }
    </style>
</head>
<body>
    <?php
        if (!isset($_SESSION)) {
        session_start();
        }
     // Si está iniciada y es un usuario se reenvia a la página principal, y si es un administrador a la página principal de administrador
    if (!isset($_SESSION['usuario'])) {
        header("location:PaginaPrincipal.php");
    } else {
        include "../php/Conexion.php";
        // Realizo una consulta que saque el usuario si existe 
        $usuario = $_SESSION['usuario'];
        $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
        if ($consulta)
        {
            // Hago el Fetch_object
            $informacion = $consulta->fetch_object();
        }
    ?>
    <!-- Header -->
    <div style="background-color: rgb(33,33,33);" > 
        <!-- Logo y Nombre -->
        <div class="container-fluid d-flex justify-content-center">
            <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="paginaPrincipalSesion.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../imagenes/GuessMaster_Logo_y_Nombre-removebg-preview.png" alt="GueesMaster Logo" width="250">
            </a>
            </header>
        </div>
    </div>
    <div class="imagenFondo">
        <div class="container d-flex justify-content-center pt-5 pb-5">
            <div class="loginBox" style="width: 75%;"> 
                <img class="user" src="../imagenes/ImagenInicioSesion.png" height="100px" width="100px">
                <h3 class="pb-5 text-white"><?php echo($informacion->usuario);  ?></h3>
                <h3 class="pb-5">Estadísticas</h3>
                <div class="inputBox pb-5" > 
                    <div class="row">
                        <div class="col-4">
                            <h3 sty>Puntos</h3>
                        </div>
                        <div class="col-4">
                            <h3>Artistas</h3>
                        </div>
                        <div class="col-4">
                            <h3>Canciones</h3>
                        </div>
                        <div class="col-4">
                            <h3><?php echo($informacion->puntos);  ?></h3>
                        </div>
                        <div class="col-4">
                            <h3><?php echo($informacion->artistas);  ?></h3>
                        </div>
                        <div class="col-4">
                            <h3><?php echo($informacion->canciones);  ?></h3>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-09">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <!--<h2 class="footer-heading"><a href="#" class="logo">GuessMaster</a></h2>-->
                    <img src="../imagenes/GuessMaster_Logo_y_Nombre-removebg-preview.png" alt="GuessMaster Logo y Nombre" class="pb-5">
                    <p class="menu d-flex justify-content-center">
                        <a href="paginaPrincipal.php">Inicio</a>
                        <a href="quienesSomos.php">¿Quiénes somos?</a>
                        <a href="terminosServicio.html">Términos de Servicio</a>
                        <a href="condiciones.php">Condiciones</a>
                        <a href="contactar.php">Contactar</a>
                    </p>
                    <div class="icons d-flex justify-content-center">
                        <a href="https://instagram.com/fokko27?igshid=NGExMmI2YTkyZg==" target="_blank" class="icon icon--instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://twitter.com/FokkoXD" target="_blank" class="icon icon--twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/jose-luis-torres-orcera-108a4827a/" target="_blank" class="icon icon--linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100093457756565" target="_blank" class="icon icon--facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    </p>
                    <p class="copyright">
                        José Luis Torres Orcera
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<?php } ?>
</html>
