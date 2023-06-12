<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuessMaster - Inicio Sesión</title>
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
// If que comprueba si existe una sesión iniciada y si no la inicia
if (!isset($_SESSION)) {
    session_start();
    // Si está iniciada y es un usuario se reenvia a la página principal, y si es un administrador a la página principal de administrador
    if (isset($_SESSION['usuario'])) {
        header("location:PaginaPrincipal.php");
    } else {
?>
<body>
    <div class="imagenFondoInicioSesion pt-5 pb-5">
        <footer class="footer-08">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <!--<h2 class="footer-heading"><a href="#" class="logo">GuessMaster</a></h2>-->
                        <a href="paginaPrincipal.php"><img src="../imagenes/GuessMaster_Logo_y_Nombre-removebg-preview.png" alt="GuessMaster Logo y Nombre" class="pb-5"></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container d-flex justify-content-center pt-5 pb-5">
            <div class="loginBox"> 
                <img class="user" src="../imagenes/ImagenInicioSesion.png" height="100px" width="100px">
                <h3>Registrarse</h3>
                <form method="post">            
                    <div class="inputBox"> 
                        <input type="text" name="usuario" placeholder="Usuario" id="usuario" required onkeyup="validarUsuario(), validar()">
                    </div>
                    <span class="text-danger" id="mensaje"></span>
                  
                    <div class="inputBox">
                        <input type="password" name="pass" placeholder="Contraseña" id="pass" required onkeyup="validarPassword(), validar()"> 
                    </div>
                    <span class="text-danger" id="mensaje2"></span>
                   
                    <div class="inputBox"> 
                        <input type="password" name="pass2" placeholder="Confirmar Contraseña" id="pass2" required onkeyup="validarPassword2(), validar()"> 
                    </div>
               
                    <span class="text-danger" id="mensaje3"></span>
                    <input type="submit" name="enviar" value="Registrarse" id="botonEnviar" class="btn disabled">
                    <?php
                    // Include que contiene la validación de crear la cuenta y la adición a la base de datos
                    include "../php/validarCreacionCuenta.php";
                    ?>
                </form> 
                <a href="inicioSesion.php">Iniciar Sesión</a>
            </div>
        </div>
    </div>
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
</body>
<script>
    // Creo 3 variables globales para comprobar que todo está validado
    let passValidada;
    let passValidada2;
    let usuarioValidado;
    // Función que valida la contraseña
    function validarPassword() {
        // Nodos
        let password = document.getElementById("pass").value;
        let mensaje = document.getElementById("mensaje2");

        let expPass = /^(?=.*[A-Z])(?=.*\d).{8,24}$/;

        // Compruebo la expresión regular de la contraseña
        if (expPass.test(password)) {
             // Si es correcta, borro el mensaje de error y pongo la variable passValidada en true
                mensaje.innerHTML = "";
                passValidada = true;
        } else {
            // Si no es correcta escribo un mensaje de error y pongo la variable passValidad en false
             mensaje.innerHTML = "La contraseña [8-24] debe tener una mayúsucla y un número";
            passValidada = false;
        }
    }

    function validarPassword2() {
        // Nodos
        let password = document.getElementById("pass").value;
        let password2 = document.getElementById("pass2").value;
        let mensaje = document.getElementById("mensaje3");


        // Compruebo la expresión regular de la contraseña
        console.log(password, password2)
        if (password == password2) {
                // Si es correcta, borro el mensaje de error y pongo la variable passValidada en true
            mensaje.innerHTML = "";
            passValidada2 = true;
        } else {
            // Si no es correcta escribo un mensaje de error y pongo la variable passValidad en false
            mensaje.innerHTML = "Las contraseñas deben ser iguales";
            passValidada2 = false;
        }

    }

    // Función que valida el usuario
    function validarUsuario() {

        // Nodos
        let usuario = document.getElementById("usuario").value;
        let expUsuario = /^[a-zA-Z0-9]{6,32}$/
        let mensaje = document.getElementById("mensaje");
        // Compruebo la expresión regular del usuario
        if (expUsuario.test(usuario))
        {
            // Si es correcta, borro el mensaje de error y pongo la variable usuarioValidado en true
            mensaje.innerHTML = "";
            usuarioValidado = true;
        }
        else
        {
            // Si no es correcta escribo un mensaje de error y pongo la variable usuarioValidado en false
            mensaje.innerHTML = "El usuario [6-24] no tiene un formato válido";
            usuarioValidado = false;
        }
    }

    // Función que valida el formulario
    function validar() {
        // Nodos
        let botonEnviar = document.getElementById("botonEnviar");
        console.log (botonEnviar)
        // If que comprueba que el usuarioValidado está a true
        if (usuarioValidado === true)
        {
            // If que comprueba que la passValidada está a true
            if (passValidada === true) 
            {
                // If que comprueba que el emailValidado está a true
                if (passValidada2 === true) 
                {
                    // Si todo está a true quita la clase disabled del botón para que se pueda pulsar y enviar
                    botonEnviar.classList.remove('disabled');
                } 
                else 
                {
                    // Si no lo está comprueba que el botón tenga la clase disabled, si no la tiene, la añade para deshabilitar el botón
                    if (!botonEnviar.classList.contains("disabled")) {
                        botonEnviar.classList.add("disabled");
                    }
                }
        } else 
        {
            // Si no lo está comprueba que el botón tenga la clase disabled, si no la tiene, la añade para deshabilitar el botón
            if (!botonEnviar.classList.contains("disabled")) 
            {
                botonEnviar.classList.add("disabled");
            }
        }
        }
        else
        {
            // Si no lo está comprueba que el botón tenga la clase disabled, si no la tiene, la añade para deshabilitar el botón
            if (!botonEnviar.classList.contains("disabled")) 
            {
                botonEnviar.classList.add("disabled");
            }
        }
    }
</script>
<?php
    }
}
?>
</html>