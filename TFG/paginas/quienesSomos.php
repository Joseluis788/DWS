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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .hh{
            border: red 1px solid;
        }
        .main{
            width: 50vw;
            height: auto;
            margin: auto;
            background-color: white;
            position: relative;
            top: 5vh;
            padding: 1vw;
            border-radius: 0vw
        }
        body{ 
            background:linear-gradient(90deg,rgb(33,33,33) ,rgb(155,81,224) ,rgb(33,33,33));
            font-family: 'Saira Semi Condensed', sans-serif
        }
        .circle{
            width: 8vw;
            height: 8vw
        }
        .head{
            font-size: 2vw;
            font-family: 'Saira Semi Condensed', sans-serif
        }
        .name{
            font-size: 1.3vw
        }
        .post{
            font-size: 1.5vw
        }
        .fa{
            color: #039be5
        }
        .row{
            padding-top: 1vw
        }
        @media only screen and (max-width: 425px){
            .main{
                width: 90vw;
                height: 300vw
            }
            .circle{
                width: 24vw;
                height: 24vw
            }
            .name{
                position: relative;
                top: 2vw;
                font-size: 5vw
            }
            .post{
                font-size: 6vw
            }
            .head{
                font-size: 8vw
            }}
    </style>
</head>
<body>
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
    <div class="pb-5 mb-5">
        <div class="main z-depth-3">
            <center>
                <p class="head fw-semibold">CONOCE A NUESTRO EQUIPO</p>
            </center><br>
            <div class="row light-blue lighten-5 z-depth-4">
                <div class="col-sm-3">
                    <img class="circle" src="../imagenes/imagenYo.jpeg">
                </div>
                <div class="col-sm-9">
                    <p class="name">José Luis Torres Orcera &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="post"><b>Director del Proyecto</b></p>
                    <p>Encargado de llevar el proyecto y supervisar todo al mínimo detalle para que todo esté perfecto.</p>
                </div>
            </div><br>
            <div class="row red lighten-5 z-depth-4">
                <div class="col-sm-3">
                    <img class="circle" src="../imagenes/imagenYo.jpeg">
                </div>
                <div class="col-sm-9">
                    <p class="name">José Luis Torres Orcera &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="post"><b>Manager de Recursos Humanos</b></p>
                    <p>Una de las piezas más importante para hacer funcionar el proyecto al crear un grupo unido y con la misma meta.</p>
                </div>
            </div><br>
            <div class="row yellow lighten-5 z-depth-4">
                <div class="col-sm-3">
                    <img class="circle" src="../imagenes/imagenYo.jpeg">
                </div>
                <div class="col-sm-9">
                    <p class="name">José Luis Torres Orcera &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="post"><b>Programador Web</b></p>
                    <p>La joya de la corona, el encargado de realizar al completo el código de la página web, sin él, nada de esto sería posible.</p>
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