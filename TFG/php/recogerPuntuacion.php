<?php
    if (!isset($_SESSION)) {
        session_start();
        }
    if (isset($_SESSION['usuario']))
    {
        $puntos = intval($_GET['puntos']);
        $artistas = intval($_GET['contadorArtistas']);
        $canciones = intval($_GET['contadorCanciones']);        
        $usuario = $_SESSION['usuario'];
    
        // Hago la conexión
        include "Conexion.php";
        // Realizo una consulta que saque el usuario si existe 
        $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
        if ($consulta)
        {
            // Hago el Fetch_object
            $informacion = $consulta->fetch_object();

            $puntos += $informacion->puntos;
            $artistas += $informacion->artistas;
            $canciones += $informacion->canciones;

            $actualizar = "UPDATE usuarios SET puntos = $puntos, artistas =  $artistas, canciones = $canciones WHERE usuario = '$usuario'";

            // Y la introduzco
            if ($conexion->query($actualizar) === TRUE) {
                echo "Datos insertados correctamente";
            } else {
                echo "Error al insertar los datos: " . $conexion->error;
            }
            

            header("location:../paginas/PaginaPrincipal.php");


        }
        else
        {
            header("location:../paginas/PaginaPrincipal.php");
        }
    }
    else
    {
        header("location:../paginas/PaginaPrincipal.php");
    }


?>