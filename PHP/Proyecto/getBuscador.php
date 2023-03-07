<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {  
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    header('Access-Control-Allow-Credentials: true');  
    header('Access-Control-Max-Age: 86400');   
}  
  
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))  
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))  
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");  
}

include "Conexion.php";

$param = $_REQUEST['param'];
$param = strtolower($param);

$consulta = $conexion->query("SELECT Nombre FROM productos WHERE Nombre LIKE '%$param%'");
$informacion = $consulta->fetch_object();

echo $informacion->Nombre;

while ($informacion != NULL)
{
    echo("<option value='$informacion->Nombre'></option>");
    $informacion = $consulta->fetch_object();
}
?>
