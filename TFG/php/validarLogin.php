<?php
// Compruebo que han pulsado el botón de enviar
if (isset($_REQUEST['enviar'])) 
{
    // Guardo el usuario y la contraseña en una variable
    $usuario = $_REQUEST['usuario'];
    $pass = md5($_REQUEST['pass']);
    // Realizo la conexión y realizo la consulta comprobando que el usuario y la contrasñea introducidos sean correctos
    include "Conexion.php";
    $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$pass'");
    if ($consulta)
    {
        // hago el fetch y compruebo si son correctos
        $informacion = $consulta->fetch_object();
        if ($informacion)
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['registrado'] = true;
    
            header("location:../paginas/paginaPrincipalSesion.php");
        }
        else
        {
            // Muestro el mensaje de error
            echo("<div class='d-flex justify-content-center'><p class='text-danger'>Los datos son erroneos</p></div>");
        }

    }
    else
    {
        // Muestro el mensaje de error
        echo("<div><p class='text-danger'>Los datos son erroneos</p></div>");
    }
    
}
?>