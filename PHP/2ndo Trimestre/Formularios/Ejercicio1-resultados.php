<?php
    // Comprobación de si se ha pulsado el botón enviar
    if (isset($_REQUEST['enviar']))
    {
        // Asiganción de variables y eliminación de espacios en la búsqueda
        $busqueda = $_REQUEST['busqueda'];
        $tipo = $_REQUEST['tipo'];
        $genero = $_REQUEST['genero'];
        $busqueda = trim($busqueda);
        // Comprobación de si la búsqueda está vacia
        if(empty($busqueda))
        {
            // Si está vacia, vuelve a mostrar el formulario marcando el error en rojo y manteniendo las elecciones anteiores
            ?>
            <h2>Formulario simple</h2><br>
            <h3>Búsqueda de canciones</h3><br>
            <form action="Ejercicio1-resultados.php" method="post">
                <label>Texto a buscar: </label>
                <input type="text" name="busqueda" size="20"> <span style="color:red;">Debe introducir una búsqueda!!</span>
                <br><br>
                <label>Buscar en: </label>
                <input type="radio" name="tipo" value="titulo"<?php if(strcmp($tipo, "titulo") == 0) echo(" checked") ?>>Titulo de la canción
                <input type="radio" name="tipo" value="album"<?php if(strcmp($tipo, "album") == 0) echo(" checked") ?>>Nombre del álbum
                <input type="radio" name="tipo" value="ambos"<?php if(strcmp($tipo, "ambos") == 0) echo(" checked") ?>>Ambos campos
                <br><br>
                <label>Género musical: </label>
                <select name="genero">
                    <option value="Todos"<?php if(strcmp($genero, "Todos") == 0) echo(" selected") ?>>Todos</option>
                    <option value="Acústica"<?php if(strcmp($genero, "Acústica") == 0) echo(" selected") ?>>Acústica</option>
                    <option value="Banda Sonora"<?php if(strcmp($genero, "Banda Sonora") == 0) echo(" selected") ?>>Banda Sonora</option>
                    <option value="Blues"<?php if(strcmp($genero, "Blues") == 0) echo(" selected") ?>>Blues</option>
                    <option value="Electrónica"<?php if(strcmp($genero, "Electrónica") == 0) echo(" selected") ?>>Electrónica</option>
                    <option value="Folk"<?php if(strcmp($genero, "Folk") == 0) echo(" selected") ?>>Folk</option>
                    <option value="Jazz"<?php if(strcmp($genero, "Jazz") == 0) echo(" selected") ?>>Jazz</option>
                    <option value="New Age"<?php if(strcmp($genero, "New Age") == 0) echo(" selected") ?>>New Age</option>
                    <option value="Pop"<?php if(strcmp($genero, "Pop") == 0) echo(" selected") ?>>Pop</option>
                    <option value="Rock"<?php if(strcmp($genero, "Rock") == 0) echo(" selected") ?>>Rock</option>
                </select>
                <br><br>
                <input type="submit" name="enviar">
            </form>
            <?php
        }
        // Si no está vacía, se muestran los resultados
        else
        {
            ?>
                <ul>
                <li>
                    Texto de búsqueda: <?php echo($busqueda) ?>
                </li>
                <li>
                    Buscar en: <?php echo($tipo) ?>
                </li>
                <li>
                    Género: <?php echo($genero) ?>
                </li>
                </ul>
                <br>
                <a href="Ejercicio1.php">Nueva búsqueda</a>
            <?php
        }
    }
    // Si se entra a resultados sin pulsar el botón enviar, te reenvia al formulario
    else
    {
        header("Location: Ejercicio1.php");
    }
?>