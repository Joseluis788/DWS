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
</head>
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
    $texto = "text-black";
}
 // If que comprueba si existe una sesión iniciada y si no la inicia
if (!isset($_SESSION)) {
    session_start();
    // Si está iniciada y es un usuario se reenvia a la página principal, y si es un administrador a la página principal de administrador
    if (isset($_SESSION['usuario'])) {
        if (strcmp($_SESSION['usuario'], "Administrador" == 0)) {
            header("location:adminPaginaPrincipal.php");
        } else {
            header("location:PaginaPrincipal.php");
        }
    } else {
?>
        <body class="<?php echo ("$colorFondo") ?>">
            <div class="container-fluid shadow-sm d-flex justify-content-center align-items-center header mb-3">
                <!-- El logo es un a para volver a la página principal -->
                <a href="PaginaPrincipal.php"><img style="height: 100px;" src="../imagenes/logo.png" alt="Logo BookLoop"></a>
            </div>
            <h1 class="d-flex justify-content-center <?php echo ("$texto") ?>">Crear cuenta</h1>
            <div class="container d-flex justify-content-center mt-5">
                <div class="col-3">

                </div>
                <div class="col-6 <?php echo ("$colorImportante") ?> p-3 rounded-3">
                    <!-- Creo el formulario -->
                    <form action="#" method="POST" id="formularioCrearCuenta">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <!-- El input tiene dos onkeyup para comprobar que el usuario está bien y el validar es una funcion que comprueba que el usuario, password y email estén bien-->
                            <input class="form-control" type="text" name="usuario" placeholder="Usuario" id="usuario" onkeyup="validarUsuario(), validar()">
                        </div>
                        <br>
                        <span class="text-danger" id="mensaje4"></span>
                        <br>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <!-- El input tiene dos onkeyup para comprobar que la contraseña está bien y el validar es una funcion que comprueba que el usuario, password y email estén bien -->
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" id="password" onkeyup="validarPassword(), validar()">
                        </div>
                        <br>
                        <span class="text-danger" id="mensaje"></span>
                        <br>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <!-- El input tiene dos onkeyup para comprobar que el email  está bien y el validar es una funcion que comprueba que el usuario, password y email estén bien-->
                            <input class="form-control" type="text" name="email" placeholder="Email" id="email" onkeyup="validarEmail(), validar()">
                        </div>
                        <br>
                        <span class="text-danger" id="mensaje2"></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-info disabled" value="Acceder" name="enviar" type="submit" id="botonEnviar">
                        </div>
                        <br><br>
                    </form>
                    <hr>
                    <?php
                    // Include que contiene la validación de crear la cuenta y la adición a la base de datos
                    include "../php/validarCreacionCuenta.php";
                    ?>
                    <!-- Div con un a para referencia que si tiene cuenta vuelva al inicio de sesión -->
                    <div class="d-flex justify-content-center">
                        <a href="login.php">¿Tienes una cuenta? Inicia sesión aquí</a>
                    </div>
                </div>
                <div class="col-3">

                </div>

            </div>

            <script>
                // Creo 3 variables globales para comprobar que todo está validado
                let passValidada;
                let emailValidado;
                let usuarioValidado;
                // Función que valida la contraseña
                function validarPassword() {
                    // Nodos
                    let password = document.getElementById("password").value;
                    let mensaje = document.getElementById("mensaje");

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
                // Función que valida el email
                function validarEmail() {
                    // Nodos
                    let email = document.getElementById("email").value;
                    let expEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/
                    let mensaje2 = document.getElementById("mensaje2");
                     // Compruebo la expresión regular del email
                    if (expEmail.test(email)) {
                        // Si es correcta, borro el mensaje de error y pongo la variable emailValidado en true
                        mensaje2.innerHTML = "";
                        emailValidado = true;
                    } else {
                        // Si no es correcta escribo un mensaje de error y pongo la variable emailValidado en false
                        mensaje2.innerHTML = "El email no tiene un formato válido"
                        emailValidado = false
                    }
                }
                // Función que valida el usuario
                function validarUsuario()
                {
                    // Nodos
                    let usuario = document.getElementById("usuario").value;
                    let expUsuario = /^[a-zA-Z0-9]{6,32}$/
                    let mensaje4 = document.getElementById("mensaje4");
                    // Compruebo la expresión regular del usuario
                    if (expUsuario.test(usuario))
                    {
                        // Si es correcta, borro el mensaje de error y pongo la variable usuarioValidado en true
                        mensaje4.innerHTML = "";
                        usuarioValidado = true;
                    }
                    else
                    {
                        // Si no es correcta escribo un mensaje de error y pongo la variable usuarioValidado en false
                        mensaje4.innerHTML = "El usuario [6-24] no tiene un formato válido";
                        usuarioValidado = false;
                    }
                }

                // Función que valida el formulario
                function validar() {
                    // Nodos
                    let botonEnviar = document.getElementById("botonEnviar");
                    // If que comprueba que el usuarioValidado está a true
                    if (usuarioValidado === true)
                    {
                        // If que comprueba que la passValidada está a true
                        if (passValidada === true) 
                        {
                            // If que comprueba que el emailValidado está a true
                            if (emailValidado === true) 
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
        </body>

<?php
    }
}
?>


</html>