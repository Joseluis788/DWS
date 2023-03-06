<?php
if (isset($_REQUEST['enviar'])) 
{
    $usuario = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];

    include "Conexion.php";
    $consulta = $conexion->query("SELECT * FROM usuario WHERE Nombre='$usuario' and Contraseña='$pass'");
    if ($consulta) 
    {
        $informacion = $consulta->fetch_object();
        if ($informacion)
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['registrado'] = true;
    
    
            if ($informacion->id_rol == 1) {
                header("location:adminPaginaPrincipal.php");
            } else {
                header("location:PaginaPrincipal.php");
            }
        }
        else
        {
            echo("<div class='d-flex justify-content-center'><p class='text-danger'>Los datos son erroneos</p></div>");
        }

    }
    else
    {
        echo("<div><p class='text-danger'>Los datos son erroneos</p></div>");
    }
    
}