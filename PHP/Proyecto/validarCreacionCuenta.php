<?php

    if (isset($_REQUEST['enviar']))
    {
        $usuario = trim($_REQUEST['usuario']);
        $pass = trim($_REQUEST['pass']);
        $email = trim($_REQUEST['email']);

        if (strcmp($usuario, "") !== 0 && strcmp($email, "") !== 0 && strcmp($pass, "") !== 0)
        {
            include "Conexion.php";

            $consulta = $conexion->query("SELECT * FROM usuario WHERE Nombre='$usuario'");
    
            
            if ($consulta)
            {
                $informacion = $consulta->fetch_object();
                if ($informacion)
                {
                    echo ("<div class='d-flex justify-content-center'><p class='text-danger'>El usuario ya existe</p></div>");
                }
                else
                {
                    $insertar = "INSERT INTO usuario (Nombre, Contraseña, Email, id_rol) VALUES ('$usuario', '$pass', '$email', '2')";
        
                    $conexion->query($insertar);

                    if (!isset($_SESSION['registrado']))
                    {
                        session_start();

                        $_SESSION['registrado'] = true;
                        $_SESSION['usuario'] = $usuario;

                        header("location:PaginaPrincipal.php");
                    }
                }
            }
        }
        else
        {
            echo ("<div class='d-flex justify-content-center'><p class='text-danger'>Debes rellenar todos los campos</p></div>");
        }
    }

?>