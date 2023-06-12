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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .hh{
            border: red 1px solid;
        }
    </style>
</head>
<?php
// If que comprueba si existe una sesión iniciada y si no la inicia
if (!isset($_SESSION)) {
  session_start();
}
// Si está iniciada y es un usuario se reenvia a la página principal, y si es un administrador a la página principal de administrador
  if (!isset($_SESSION['usuario'])) {

?>
<body>
    <div style="background-color: rgb(33,33,33);" > 
        <!-- Logo y Nombre -->
        <div class="container-fluid">
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
    </div>
    <?php } else { ?>
    <div style="background-color: rgb(33,33,33);" > 
        <!-- Logo y Nombre -->
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-5">
            <a href="paginaPrincipal.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../imagenes/GuessMaster_Logo_y_Nombre-removebg-preview.png" alt="GueesMaster Logo" width="250">
            </a>
            <!-- Menú -->
            <ul class="nav nav-pills d-flex flex-wrap align-items-center">
                <li class="nav-item"><a href="" class="nav-link active"><?php echo$_SESSION['usuario'];?></a></li>
                <li class="nav-item ms-4"><a href="../php/logOut.php" class="nav-link active bg-danger" aria-current="page">Cerrar Sesión</a></li>
            </ul>
            </header>
        </div>
    </div>
    <?php } ?>
    <section id="contact" style="width: 100%;">
			<div class="section-content">
				<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Contacta con nosotros</span></h1>
				<h3>Deja tu mensaje para mejorar el funcionamiento de la web</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Su nombre</label>
					    	<input type="text" class="form-control" id="nombre" placeholder=" Escriba su nombre">
				  		</div>
				  		<div class="form-group">
					    	<label for="email">Dirección de correo electrónico</label>
					    	<input type="text" class="form-control" id="email" placeholder=" Escriba su email">
					  	</div>	
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="descripcion"> Mensaje</label>
			  			 	<textarea  class="form-control" id="descripcion" placeholder="Introduzca su mensaje"></textarea>
			  			</div>
			  			<div>

			  				<button type="button" class="btn btn-default submit" onclick="enviar()"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Enviar Mensaje</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
          <!-- Footer -->
          <footer class="footer-07">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <!--<h2 class="footer-heading"><a href="#" class="logo">GuessMaster</a></h2>--> 
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
        <template id ="enviar">
            <swal-html>
                    <h3 class="rankingLetra">¡Su mensaje ha sido enviado con éxito!</h3>
            </swal-html>
        </template>
        <script>
            function enviar() {
                Swal.fire({
                    template: '#enviar',
                    timer: 10000,
                });
                document.getElementById("nombre").value = "";
                document.getElementById("descripcion").value = "";
                document.getElementById("email").value = "";
            }
        </script>
</body>
</html>