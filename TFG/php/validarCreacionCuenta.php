<?php
    // Compruebo que han pulsado el botón
    if (isset($_REQUEST['enviar']))
    {
        // Meto los campos en una variable
        $usuario = trim($_REQUEST['usuario']);
        $pass = trim($_REQUEST['pass']);
        $patternUsuario = "/^[a-zA-Z0-9]{6,24}$/";
        $patternPass = "/^(?=.*[A-Z])(?=.*\d).{8,24}$/";
        // Compruebo que los campos no vienen vacios
        if (strcmp($usuario, "") !== 0 && strcmp($pass, "") !== 0)
        {
            // Compruebo el usuario
            if (preg_match($patternUsuario, $usuario))
            {
                // Compruebo la contraseña
                if (preg_match($patternPass, $pass))
                {
                    // Cifra la pass y compruebo el email
                    $pass = md5($pass);

                    // Hago la conexión
                    include "Conexion.php";
                    // Realizo una consulta que saque el usuario si existe 
                    $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
            
                    // Compruebo que se ha hecho bien
                    if ($consulta)
                    {
                        // Hago el Fetch_object
                        $informacion = $consulta->fetch_object();
                        // Si existe el usuario, muestro el mensaje de error de que el usuario ya existe
                        if ($informacion)
                        {
                            echo ("<div class='d-flex justify-content-center'><p class='text-danger'>El usuario ya existe</p></div>");
                        }
                        // En caso contrario se realizar la inserción del usuario en la base de datos
                        else
                        {
                            // Guardo el insert en una variable
                            $insertar = "INSERT INTO usuarios (usuario, pass) VALUES ('$usuario', '$pass')";
                            // Y la introduzco
                            $conexion->query($insertar);
                            // Si no está seteada sesión, la comienza y la reenvia a la página principal
                            if (!isset($_SESSION['registrado']))
                            {
                                session_start();
        
                                $_SESSION['registrado'] = true;
                                $_SESSION['usuario'] = $usuario;
        
                                header("location:../paginas/paginaprincipalSesion.php");
                            }
                            else
                            {
                                header("location:../paginas/paginaprincipalSesion.php");
                            }
                        }
                    }

                }
                else
                {
                    echo ("<div class='d-flex justify-content-center'><p class='text-danger'>Contraseña no valida</p></div>");
                }
            }
            else
            {
                echo ("<div class='d-flex justify-content-center'><p class='text-danger'>Usuario no valido</p></div>");
            }

        }
        else
        {  
            // Muestro el mensaje de error de que es necesario rellenar todos los campos
            echo ("<div class='d-flex justify-content-center'><p class='text-danger'>Debes rellenar todos los campos</p></div>");
        }
    }

?>