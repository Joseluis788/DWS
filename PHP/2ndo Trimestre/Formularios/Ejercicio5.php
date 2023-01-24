<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    // Abro PHP y compruebo si no han pulsado enviar o si busqueda está vacio para mostrar el formulario
    if (!isset($_REQUEST['enviar']) || empty(trim($_REQUEST['busqueda'])))
    {
    ?>
    <h2>Formulario simple</h2><br>
    <h3>Búsqueda de canciones</h3><br>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label>Texto a buscar: </label>
        <input type="text" name="busqueda" size="20"> 
        <?php 
        // Muestro todo el formulario y compruebo si han pulsado enviar y si lo han pulsado, si busqueda se encuentra vacía
        if(isset($_REQUEST['enviar']))
        {
            if(empty(trim($_REQUEST['busqueda'])))
            {
                echo("<span style='color:red;'>Debe introducir una búsqueda!!</span>");
            }
        }
        // Aquí se encuentran los tipo radio donde además compruebo si ya se ha especificado anteriormente, y si es así se marca como checked
        ?>
        <br><br>
        <label>Buscar en: </label>
        <input type="radio" name="tipo" value="Titulo" checked<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['tipo'], "Titulo") == 0) echo(" checked") ?>>Titulo de la canción
        <input type="radio" name="tipo" value="Album"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['tipo'], "Album") == 0) echo(" checked") ?>>Nombre del álbum
        <input type="radio" name="tipo" value="Ambos"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['tipo'], "Ambos") == 0) echo(" checked") ?>>Ambos campos
        <br><br>
        <?php
            // Aquí se encuentran los tipo select con sus options en los que se comprueba si se ha especificado anteriormente y se marca con selected
        ?>
        <label>Género musical: </label>
        <select name="genero">
            <option value="Todos" selected<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Todos") == 0) echo(" selected") ?>>Todos</option>
            <option value="Acústica"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Acústica") == 0) echo(" selected") ?>>Acústica</option>
            <option value="Banda Sonora"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Banda Sonora") == 0) echo(" selected") ?>>Banda Sonora</option>
            <option value="Blues"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Blues") == 0) echo(" selected") ?>>Blues</option>
            <option value="Electrónica"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Electrónica") == 0) echo(" selected") ?>>Electrónica</option>
            <option value="Folk"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Folk") == 0) echo(" selected") ?>>Folk</option>
            <option value="Jazz"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Jazz") == 0) echo(" selected") ?>>Jazz</option>
            <option value="New Age"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "New Age") == 0) echo(" selected") ?>>New Age</option>
            <option value="Pop"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Pop") == 0) echo(" selected") ?>>Pop</option>
            <option value="Rock"<?php if(isset($_REQUEST['enviar']))if(strcmp($_REQUEST['genero'], "Rock") == 0) echo(" selected") ?>>Rock</option>
        </select>
        <br><br>
        <input type="submit" name="enviar">
    </form>
    <?php
    }
    // Muestro los datos introducidos
    else
    {
        ?>
        <ul>
        <li>
            Texto de búsqueda: <?php echo($_REQUEST['busqueda']) ?>
        </li>
        <li>
            Buscar en: <?php echo($_REQUEST['tipo']) ?>
        </li>
        <li>
            Género: <?php echo($_REQUEST['genero']) ?>
        </li>
        </ul>
        <br>
        <a href="Ejercicio5.php">Nueva búsqueda</a>
    <?php
    }
    ?>
</body>
</html>