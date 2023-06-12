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
<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION['usuario'])) {
  header("location:PaginaPrincipalSesion.php");
} else {
?>
<body>
    <!-- style="background:linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 66%)" -->
    <!-- Header -->
    <div class="imagenFondo" > 
        <!-- Logo y Nombre -->
        <div class="container-fluid pb-5">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-5">
            <a href="paginaPrincipal.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../imagenes/GuessMaster_Logo_y_Nombre-removebg-preview.png" alt="GueesMaster Logo" width="250">
            </a>
            <!-- Menú -->
            <ul class="nav nav-pills d-flex flex-wrap align-items-center">
                <li class="nav-item"><a href="crearCuenta.php" class="nav-link active" aria-current="page">Registrarse</a></li>
                <li class="nav-item"><a href="inicioSesion.php" class="nav-link text-white">Iniciar Sesión</a></li>
                <li class="nav-item"><a href="comoJugar.php" class="nav-link text-white">¿Cómo se juega?</a></li>
            </ul>
            </header>
        </div>
        <div class="container d-flex justify-content-center mt-5 pb-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center pb-4">
                    <h0 class="text-white ">¿Listo para poner a prueba</h0>
                </div>
                <div class="col-12  d-flex justify-content-center pb-5">
                    <h0 class="text-white">tus capacidades musicales?</h0>
                </div>
                <div class="col-12 d-flex justify-content-center pb-5">
                    <h5 class="text-white">¡Sé el mejor adivinando canciones y a sus artistas!</h5>
                </div>
                <div class="col-12 d-flex justify-content-center pb-5 mb-5">
                    <button class="btn btn-lg fw-semibold glow-button"  style="color: rgb(155,81,224); width: 10%; height: 130%;" onclick="jugar()">Empezar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid colorFondo pt-3">
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="text-white">PLAYLISTS</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center pt-5">
          <div class="container">
            <div class="row">
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">Reggaeton</h2>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">Rock</h2>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">K-Pop</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid container1 pb-5 pt-5 d-flex justify-content-between">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <a href="juego.php?genero=<?php echo urlencode('Reggaeton'); ?>"><img src="../imagenes/reggaeton.jpg" alt="Reggaeton" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Te consideras un experto en reggaeton?
                    Juega a adivinar la canción, desafía tu conocimiento,
                    descubre esos éxitos que te han hecho mover el cuerpo.
                    Demuestra tu pasión por el género más caliente,
                    adivina cada ritmo y sé el ganador indiscutible.</p>
                  <a href="juego.php?genero=<?php echo urlencode('Reggaeton'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
           <div class="card">
              <div class="face face1">
                <div class="content">
                  <a href="juego.php?genero=<?php echo urlencode('Rock'); ?>"><img src="../imagenes/Rock.jpg" alt="Rock" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Eres amante del género rock en su esencia?
                    Desafía tu oído y mente,
                    encuentra esas melodías que te hacen vibrar fuertemente.
                    Demuestra tu pasión por el rock más poderoso y salvaje,
                    adivina cada riff y sé el rey indiscutible del paisaje.</p>
                  <a href="juego.php?genero=<?php echo urlencode('Rock'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
           <div class="card">
              <div class="face face1">
                <div class="content">
                  <a href="juego.php?genero=<?php echo urlencode('Kpop'); ?>"><img src="../imagenes/K-pop.jpg" alt="kPop" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Te fascina el mundo del K-pop colorido?
                    Juega a adivinar la canción, demuestra tu conocimiento,
                    descubre esas melodías que te llenan de emoción.
                    Muestra tu amor por el género más dinámico y vibrante,
                    adivina cada ritmo y sé el fan número uno, brillante.</p>
                  <a href="juego.php?genero=<?php echo urlencode('Kpop'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
         </div>
         <div class="container-fluid d-flex justify-content-center pt-5">
          <div class="container">
            <div class="row">
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">EDM</h2>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">Trap Argentino</h2>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h2 class="text-white">Pop</h2>
              </div>
            </div>
          </div>
        </div>
         <div class="container-fluid container1 pb-5 pt-5">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <a href="juego.php?genero=<?php echo urlencode('EDM'); ?>"><img src="../imagenes/Electronica.jpg" alt="EDM" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Eres un amante de la música electrónica y su energía?
                    Demuestra tus habilidades con esta adivinanza llena de euforia.
                    Muestra tu devoción por el género más vibrante y frenético,
                    adivina cada beat y sé el maestro electrónico auténtico.</p>
                  <a href="juego.php?genero=<?php echo urlencode('EDM'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
           <div class="card">
              <div class="face face1">
                <div class="content">
                  <a href="juego.php?genero=<?php echo urlencode('Trap Argentino'); ?>"><img src="../imagenes/Trap Argentino.jpg" alt="Trap Argentino" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Te mueves al ritmo del trap argentino intenso?
                    Demuestra tu flow con esta adivinanza en suspense.
                    Muestra tu pasión por el género más urbano y callejero,
                    adivina cada flow y sé el experto verdadero.</p>
                  <a href="juego.php?genero=<?php echo urlencode('Trap Argentino'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
           <div class="card">
              <div class="face face1">
                <div class="content">
                    <a href="juego.php?genero=<?php echo urlencode('Pop'); ?>"><img src="../imagenes/pop.jpg" alt="Pop" width="300" height="200"></a>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p>¿Eres un fanático del pop y su melodía brillante?
                      Escucha las notas, adivina el estribillo y la emoción.
                      Desafía tu oído y sé el rey o la reina del pop,
                      adivina cada canción y demuestra tu talento sin stop.</p>
                  <a href="juego.php?genero=<?php echo urlencode('Pop'); ?>" type="button" style="width: 25%;" class="d-flex justify-content-center">Jugar</a>
                </div>
              </div>
           </div>
         </div>
    </div>
    <!-- Footer -->
    <footer class="footer-07">
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
    
    <!-- <iframe class="desenfoque" id="video" width="560" height="315" src="https://www.youtube.com/embed/wFj7d_fnYTU?rel=0&amp;autoplay=1" title="YouTube video player" frameborder="0"></iframe>-->

    <script>
      function jugar() {
        window.location.href = "juego.php"
      }
    </script>
    <?php }
    ?>
  </body>
</html>