<?php
        // Conexion utilizando Orientación a Objetos
        @$conexion = new mysqli('localhost', 'guessmaster', 'supertfg', 'guessmaster');
        if ($conexion != null && $conexion->errno != 0) {
            echo "Error $conexion->connect_errno conectando a la base de datos: $conexion->connect_error";
            die("Arregle el asunto");
        }
?>