<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelmas</title>
    <style>
        table{
            background-color: rgb(254,254,204);
            border: 1px solid black;
        }
        td{
            padding: 5px;
            
        }

        tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1 style="color: blue;">Agencia de viajes Travelmas</h1>
    <?php
        if(file_exists("viajes.txt"))
        {
            $viajes = fopen("viajes.txt", "r");
            ?>
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
                while ($tok !== false);
                {
                    echo("<tr>$tok</tr>");
                    $tok = strtok(":");
                }
                ?>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        
        <table>
            <tr>
                <td>Introduzca el nombre del circuito</td>
                <td><input type="text" name="circuito"></td>
            </tr>
        </table>

    </form>
</body>
</html>