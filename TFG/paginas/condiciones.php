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
?>
<!-- Header -->
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
<div class="container-fluid colorFondo pt-5 pb-5">
    <div class="container">

        <!-- Punto 0 -->
        <h1 class="text-white">Condiciones de Uso</h1>
        <br><br>
        <h6 class="terminos">- Estas Condiciones de Uso (en adelante, "las Condiciones") establecen los términos y condiciones para el uso de esta página web (en adelante, "el Sitio").</h6>
        <h6 class="terminos">- Al acceder o utilizar este Sitio, usted acepta cumplir con estas Condiciones en su totalidad. Si no está de acuerdo con alguno de los términos, no debe utilizar este Sitio.</h6>
        <br><br>

        <!-- Punto 1 -->
        <h1 class="terminos">1. Uso del Sitio</h1>
        <br><br>
        <!-- Punto 1.1 -->
        <h4 class="terminos">1.1 Uso autorizado</h4>
        <br><br>
        <h6 class="terminos">- Usted se compromete a utilizar el Sitio de acuerdo con las leyes aplicables y estas Condiciones. </h6>
        <h6 class="terminos">- Queda prohibido cualquier uso del Sitio con fines ilegales, fraudulentos o que pueda causar daño a terceros.</h6>
        <br><br>
        <!-- Punto 1.2 -->
        <h4 class="terminos">1.2 Acceso y seguridad</h4>
        <br><br>
        <h6 class="terminos">- Usted es responsable de mantener la confidencialidad de su información de acceso al Sitio, como nombre de usuario y contraseña.  </h6>
        <h6 class="terminos">- Usted acepta notificar de inmediato a la administración del Sitio cualquier uso no autorizado de su cuenta o cualquier otra violación de seguridad.</h6>
        <br><br>

        <!-- Punto 2 -->
        <h1 class="terminos">2. Contenido del sitio</h1>
        <br><br>
        <!-- Punto 2.1 -->
        <h4 class="terminos">2.1 Propiedad</h4>
        <br><br>
        <h6 class="terminos">- Todo el contenido presente en el Sitio, incluyendo pero no limitado a texto, gráficos, logotipos, imágenes, videos, audio, código fuente y software, está protegido 
        </h6> <h6 class="terminos">por derechos de autor y otras leyes de propiedad intelectual. </h6>
        <h6 class="terminos">- Usted se compromete a respetar estos derechos y no puede reproducir, distribuir, modificar, crear trabajos derivados, exhibir públicamente ni utilizar de ninguna manera 
        </h6> <h6 class="terminos">el contenido sin el permiso expreso por escrito del titular de los derechos.</h6>
        <br><br>
        <!-- Punto 2.2 -->
        <h4 class="terminos">2.2 Licencia Limitada</h4>
        <br><br>
        <h6 class="terminos">- Se le concede una licencia limitada, no exclusiva y no transferible para acceder y utilizar el contenido del Sitio con el propósito de obtener información 
        </h6> <h6 class="terminos">y hacer uso de los servicios ofrecidos.  </h6>
        <h6 class="terminos">- No se le otorga ningún derecho o licencia para utilizar dichas marcas sin el permiso previo por escrito del titular.</h6>
        <br><br>

        <!-- Punto 3 -->
        <h1 class="terminos">3. Enlaces a otros sitios web</h1>
        <br><br>
        <h6 class="terminos">- El Sitio puede contener enlaces a otros sitios web de terceros. Estos enlaces se proporcionan únicamente para su conveniencia y no implican respaldo, 
        </h6> <h6 class="terminos">aprobación o control de dichos sitios por parte de la administración del Sitio.  </h6>
        <h6 class="terminos">- Usted accede a estos sitios bajo su propio riesgo y debe revisar los términos y condiciones de cada sitio vinculado.</h6>
        <br><br>

        <!-- Punto 4 -->
        <h1 class="terminos">4. Exclusión de responsabilidad</h1>
        <br><br>
        <!-- Punto 4.1 -->
        <h4 class="terminos">4.1 Exención de garantías</h4>
        <br><br>
        <h6 class="terminos">-  El Sitio se proporciona "tal cual" y "según disponibilidad". No se ofrece ninguna garantía de ningún tipo, ya sea expresa o implícita, incluyendo, entre otras, 
        </h6> <h6 class="terminos">garantías de comerciabilidad, idoneidad para un propósito particular y no infracción.</h6>
        <br><br>
        <!-- Punto 4.2 -->
        <h4 class="terminos">4.2 Limitación de responsabilidad</h4>
        <br><br>
        <h6 class="terminos">- En la medida máxima permitida por la ley, la administración del Sitio no será responsable por ningún daño directo, indirecto, incidental, 
        </h6> <h6 class="terminos">especial o consecuente que surja del uso o la imposibilidad de uso del Sitio, incluyendo, entre otros, pérdida de datos, pérdida de beneficios o interrupción del negocio.</h6>
        <br><br>

        <!-- Punto 5 -->
        <h1 class="terminos">5. Modificaciones y terminación</h1>
        <br><br>
        <h6 class="terminos">- La administración del Sitio se reserva el derecho de modificar, suspender o terminar el Sitio o cualquier parte de él, en cualquier momento y sin previo aviso.</h6>
        <h6 class="terminos">- Asimismo, se reserva el derecho de modificar estas Condiciones en cualquier momento.</h6>
        <h6 class="terminos">- Se recomienda revisar periódicamente las Condiciones para estar al tanto de cualquier cambio.</h6>
        <br><br>

        <!-- Punto 7 -->
        <h1 class="terminos">6. Ley aplicable y jurisdicción</h1>
        <br><br>
        <h6 class="terminos">- Estas Condiciones se regirán e interpretarán de acuerdo con las leyes del país o jurisdicción correspondiente.</h6>
        <h6 class="terminos">- Cualquier disputa que surja en relación con estas Condiciones se someterá a la jurisdicción exclusiva de los tribunales competentes de dicho país o jurisdicción.</h6>
        <h6 class="terminos">- Al utilizar este Sitio, usted acepta estas Condiciones en su totalidad. Si no está de acuerdo con alguna parte de estas Condiciones, se le recomienda no utilizar el Sitio.</h6>
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