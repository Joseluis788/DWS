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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../scripts/script.js"></script>
    <style>
        .hh{
            border: red 1px solid;
        }
    </style>
</head>
<?php
    // Esto es simplemente para que no aparezca el warning de que el genero está vacio
    error_reporting(E_PARSE);
    // If que comprueba si existe una sesión iniciada y si no la inicia
    if (!isset($_SESSION)) {
    session_start();
    }

    include "../php/Conexion.php";
    $parametro=$_GET['genero'];
    $consultaBase = "SELECT * FROM canciones ";
    if (!empty($parametro))
    {
        $resultado = $consultaBase . "WHERE genero = '". $parametro. "' ORDER BY RAND() LIMIT 10 "; 
    }
    else{
        $resultado = $consultaBase . "ORDER BY RAND() LIMIT 10 ";
    }

    $consulta = $conexion->query($resultado);
    
    if ($consulta)
    {
        $informacion = $consulta->fetch_object();
        if ($informacion)
        $i = 0;
        $array = array(); 
        {
            while ($informacion != NULL) {
                $array[$i]["id"] = $informacion->id;
                $array[$i]["enlace"] = $informacion->enlace;
                $array[$i]["cancion"] = $informacion->cancion;
                $array[$i]["artista"] = $informacion->artista;
                $array[$i]["genero"] = $informacion->genero;
                $array[$i]["imagen"] = $informacion->imagen;

                $informacion = $consulta->fetch_object();
                $i += 1;
            }
            $arrayjson = json_encode($array);
        }
    }
?>
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
    <div class="container-fluid pt-5 pb-5 imagenFondoJuego">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 ranking rounded-3 pb-5">
                    <div class="row pt-4">
                        <h3 class="rankingLetra">RANKINGS</h3> 
                    </div>
                    <hr class="rankingLetra opacity-100 w-100">
                    <div class="rankingPlayer row pt-3 pb-3">
                        <div class="col-6"> 
                            <h5 class="rankingLetra fw-semibold"><?php if (isset($_SESSION['usuario'])){ echo$_SESSION['usuario'];} else {echo("JUGADOR");} ?></h5>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <h5 class="rankingLetra" id="puntos"></h5>
                        </div>
                    </div>
                </div>
                <div class="col-1">

                </div>
                <div class="col-8 ranking rounded-3 pb-5">
                    <div class="pt-4">
                        <h3 class="rankingLetra" id="tiempo"></h3>
                    </div>
                    <div id="numero" style="color:black">

                    </div>
                    <div class="pt-5 d-flex justify-content-center mt-5">
                        <img src="" id="imagen" width="300px" height="200px" class="desenfoque">
                        <iframe class="visually-hidden" id="sonido" width="560" height="315" src="" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="pt-5 d-flex justify-content-center pb-5">
                        <h4 id="cancion" class="rankingLetra visually-hidden"></h4>
                    </div>

                    <div class="d-flex justify-content-center pt-5 pb-3">
                        <button class="btn btn-lg fw-semibold glow-button2" id="empezarMusica" style="color: white; background-color: rgb(155,81,224) ; width: 20%; height: 100%;" onclick="tiempo()">Reproducir música</button>
                    </div>
                    
                    <div class="d-flex justify-content-center pb-3">
                    
                        <input type="text" class="rounded-2 w-50 inputJuego" id="respuesta" placeholder="Escribe el artista o la canción" onkeyup="comprobarDatos()">
                        
                    </div>
                    <div class="d-flex justify-content-center pb-3" id="CancionDiv">
                        <i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i><span class="fw-semibold text-danger ps-1 pe-1"> Canción </span><i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i>
                    </div>
                    <div class="d-flex justify-content-center pb-2" id="ArtistaDiv">
                        <i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i><span class="fw-semibold text-danger ps-1 pe-1"> Artista </span><i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i>
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
        <template id="siguienteRonda">
            <swal-html>
                <h3 class="rankingLetra">La siguiente ronda comienza en: </h3>
                <div id="countdown">
                    <div id="countdown-number" style="color: black; font-size: large;"></div>
                    <svg>
                    <circle r="18" cx="20" cy="20"></circle>
                    </svg>
                </div>
                
            </swal-html>
        </template>
        <template id ="finalPartida">
            <swal-html>
                    <h3 class="rankingLetra">¡La partida ha finalizado!</h3>
                    <div>
                        <p id="puntosFinal" class="rankingLetra"></p>
                        <p id="cancionesFinal" class="rankingLetra"></p>
                        <p id="artistasFinal" class="rankingLetra"></p>
                    </div>
                    <div>
                        <button class="btn text-white" onclick="botonVolver()" style="background-color: rgb(155,81,224);">Volver</button>
                    </div>
            </swal-html>
        </template>
 
  <script>
    timerSiguienteRonda ();
    var array_js = <?php echo $arrayjson; ?>;
    contadorCancion = 0;
    contadorArtista = 0;
    contador = 0;
    puntos = 0;
    var puntosJugador = document.getElementById("puntos");
    puntosJugador.innerHTML = puntos + "pts";
    // Utilizar el array en JavaScript
    console.log(array_js);
    
    //document.getElementById("cancion").innerHTML = array_js[0].cancion + " - " + array_js[0].artista;
    //document.getElementById("imagen").src = "../imagenes/" + array_js[0].imagen;

    function tiempo() {
      var tiempoRestante = 15; // Tiempo inicial en segundos
      console.log(contador);
      botonMusica()
      document.getElementById("empezarMusica").disabled = true;
      // Función que se ejecuta cada segundo
      var intervalo = setInterval(function() {
        // Mostrar el tiempo restante en el elemento HTML
        document.getElementById("tiempo").innerHTML = "Tiempo restante: " + tiempoRestante + " segundos";

        // Actualizar el tiempo restante
        tiempoRestante--;

        // Detener el contador cuando llegue a cero
        if (tiempoRestante < 0) {
            clearInterval(intervalo);
            document.getElementById("tiempo").innerHTML = "¡Tiempo terminado!";
        
            var imagen = document.getElementById('imagen');
            imagen.classList.remove('desenfoque');

            var titulo = document.getElementById('cancion');
            titulo.classList.remove('visually-hidden');
            contador += 1;
            if (contador != 10)
            {
                setTimeout(timerSiguienteRonda, 10000);
            }
            else
            {
                setTimeout(finalPartida, 10000);
            }
        }
      }, 1000); // Intervalo de 1 segundo (1000 milisegundos)
    }

    function timerSiguienteRonda ()
    {
        Swal.fire({
            template: '#siguienteRonda',
            timer: 5000,
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            
        }).then(()=> nuevaCancion(), agregarClases());

        var countdownNumberEl = document.getElementById('countdown-number');
        var countdown = 5;

        countdownNumberEl.textContent = countdown;

        setInterval(function() {
        countdown = --countdown <= 0 ? 5 : countdown;

        countdownNumberEl.textContent = countdown;
        }, 1000);
        
    }

    function finalPartida ()
    {
        Swal.fire({
            template: '#finalPartida',
            allowOutsideClick: false,
            allowEscapeKey: false,
            showConfirmButton: false,
        });

        var puntosFinal = document.getElementById("puntosFinal");
        var artistaFinal = document.getElementById("artistasFinal");
        var cancionFinal = document.getElementById("cancionesFinal");

        puntosFinal.innerHTML = "Has conseguido " + puntos + " pts";
        artistaFinal.innerHTML = "Has acertado " + contadorArtista + " artistas";
        cancionFinal.innerHTML = "Has acertado " + contadorCancion + " canciones";
    }

    function agregarClases() {
        var imagen = document.getElementById('imagen');
        imagen.classList.add('desenfoque');

        var titulo = document.getElementById('cancion');
        titulo.classList.add('visually-hidden');

        var divArtista = document.getElementById("ArtistaDiv");
        var divCancion = document.getElementById("CancionDiv");

        divArtista.innerHTML = '<i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i><span class="fw-semibold text-danger ps-1 pe-1"> Artista </span><i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i>'
        divCancion.innerHTML = '<i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i><span class="fw-semibold text-danger ps-1 pe-1"> Canción </span><i class="fa-solid fa-square-xmark" style="color: #ff0000; font-size:25px"></i>'
    }

    function comprobarDatos() {
        var artista = array_js[contador].artista;
        var cancion = array_js[contador].cancion;

        artistaBueno = artista.toUpperCase();
        cancionBueno = cancion.toUpperCase();

        var respuesta = document.getElementById("respuesta");

        var respuestabien = respuesta.value.trim();
        var respuestaBuena = respuestabien.toUpperCase();
        
        var divArtista = document.getElementById("ArtistaDiv");
        var divCancion = document.getElementById("CancionDiv");

        var puntosJugador = document.getElementById("puntos");
        puntosJugador.innerHTML = puntos + "pts";

        if (respuestaBuena == artistaBueno) {
            divArtista.innerHTML = '<i class="fa-solid fa-square-check" style="color: #11ff00; font-size: 25px;"></i><span class="fw-semibold text-success ps-1 pe-1"> Artista </span><i class="fa-solid fa-square-check" style="color: #11ff00; font-size: 25px;"></i>'
            respuesta.value = "";
            puntos += 100;
            puntosJugador.innerHTML = puntos + "pts";
            contadorArtista += 1;
        }
        if (respuestaBuena == cancionBueno)
        {
            divCancion.innerHTML = '<i class="fa-solid fa-square-check" style="color: #11ff00; font-size: 25px;"></i><span class="fw-semibold text-success ps-1 pe-1"> Canción </span><i class="fa-solid fa-square-check" style="color: #11ff00; font-size: 25px;"></i>'
            respuesta.value = "";
            puntos += 100
            puntosJugador.innerHTML = puntos + "pts";
            contadorCancion += 1;
        }        
    }

    function botonVolver (){
        <?php if(isset($_SESSION['usuario']))
        {
            echo ('window.location.href = "paginaPrincipalSesion.php"');
        }
        else
            echo ('window.location.href = "paginaPrincipal.php"');
        ?>
    }

    function botonMusica (){
    
        document.getElementById("sonido").src += "&autoplay=1";
    }

    function nuevaCancion (){
        document.getElementById("empezarMusica").disabled = false;
        document.getElementById("cancion").innerHTML = array_js[contador].cancion + " - " + array_js[contador].artista;
        document.getElementById("imagen").src = "../imagenes/" + array_js[contador].imagen;
        document.getElementById("sonido").src = array_js[contador].enlace;
    }

  </script>
</body>
</html>