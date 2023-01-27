<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelmas</title>
    <style>
        table{
            
            border: 1px solid black;
        }
        td{
            padding: 7px;
            background-color: rgb(254,254,204);
        }

        th{
          background-color: rgb(204,51,204);
          padding: 7px;
        }
    </style>
</head>
<body>
    <h1 style="color: blue;">Agencia de viajes Travelmas</h1>
    <?php
        if(isset($_REQUEST['enviar']))
        {
            $circuito = $_REQUEST['circuito'];
            $destino = $_REQUEST['destino'];
            $duracion = $_REQUEST['duracion'];
            $dias = $_REQUEST['dias'];

            $viajes2 = fopen("viajes.txt", "a");
            fwrite($viajes2, $circuito.":");
            fwrite($viajes2, $destino.":");
            fwrite($viajes2, $duracion.":");
            fwrite($viajes2, $dias."\n");
            fclose($viajes2);
        }
        if(file_exists("viajes.txt"))
        {
            $viajes = fopen("viajes.txt", "r");
            ?>
            <br><br>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Destino</th>
                    <th>Duracion</th>
                    <th>Salida</th>
                </tr>
            <?php
            while (!feof($viajes))
            {
                ?>
                <tr>

                
                <?php
                $linea = fgets($viajes);
                $tok = strtok($linea, ":");
                while ($tok !== false)
                {
                    echo("<td>$tok</td>");
                    $tok = strtok(":");
                }
                ?>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
            fclose($viajes);
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <br><br>
        <table>
            <tr>
                <td>Introduzca el nombre del circuito</td>
                <td><input type="text" name="circuito"></td>
            </tr>
            <tr>
                <td>Introduzca el destino</td>
                <td><input type="text" name="destino"></td>
            </tr>
            <tr>
                <td>Introduzca la duración</td>
                <td><input type="text" name="duracion"></td>
            </tr>
            <tr>
                <td>Introduzca los días de salida</td>
                <td><input type="text" name="dias"></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>