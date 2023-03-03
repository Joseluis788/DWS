<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <?php
    if (!isset($_REQUEST['enviar']) || empty(trim($_REQUEST['nombre'])) || empty(trim($_REQUEST['apellidos'])) || empty(trim($_REQUEST['dni'])) || empty($_FILES['imagen']['name']))
    {
        $cuenta = fopen("contador.txt", "r");
        $contador = fread($cuenta, 1000);
        fclose($cuenta);
        $contador += 1;
        $cuenta = fopen("contador.txt", "w");
        fwrite($cuenta, $contador);
        fclose($cuenta);
        ?>
        <h1 style="color:blue;">FORMULARIO EXAMEN</h1>
        <BR></BR>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" ENCTYPE="multipart/form-data">
            <label>Escriba su nombre:</label>
            <input type="text" name="nombre"><?php if(isset($_REQUEST['enviar']) && empty(trim($_REQUEST['nombre']))) echo("<p style='color:red;'>Debe introducir un nombre!!</p>"); ?>
            <br><br>
            <label>Escriba sus apellidos:</label>
            <input type="text" name="apellidos"><?php if(isset($_REQUEST['enviar']) && empty(trim($_REQUEST['apellidos']))) echo("<p style='color:red;'>Debe introducir los apellidos!!</p>"); ?>
            <br><br>
            <label>Escriba su DNI:</label>
            <input type="text" name="dni"><?php if(isset($_REQUEST['enviar']) && empty(trim($_REQUEST['dni']))) echo("<p style='color:red;'>Debe introducir el DNI!!</p>"); ?>
            <br><br>
            <label>Indique su sexo:</label>
            <input type="radio" name="sexo" value="Hombre" checked>Hombre
            <input type="radio" name="sexo" value="Mujer">Mujer
            <br><br>
            <label>Indique sus méritos:</label>
            <br>
            <input type="checkbox" name="carnet" value="Carnet"> Carnet de Conducir B
            <br>
            <input type="checkbox" name="pensionista" value="Pensionista"> Pensionista
            <br>
            <input type="checkbox" name="experiencia" value="Experiencia"> 20 años de expericencia
            <br>
            <input type="checkbox" name="discapacidad" value="Discapacidad"> Discapacidad superior al 33%
            <br><br>
            <label>Indique su país de residencia: </label>
            <select name="pais">
                <option value="España" selected>España</option>
                <option value="Portugal">Portugal</option>
                <option value="Francia">Francia</option>
            </select>
            <br><br>
            <label>Introduce un comentario: </label>
            <br>
            <textarea name="comentario" cols="50" rows="5">Escribe un comentario...</textarea>
            <br><br>
            <label>Suba su foto de carnet:</label>
            <br>
            <input type="file" name="imagen"><?php if(isset($_REQUEST['enviar']) && empty($_FILES['imagen']['name'])) echo("<p style='color:red;'>Debe introducir una foto!!</p>")
            ?>
            <br><br>
            <input type="submit" name="enviar" value="Enviar">
            <br><br>
        </form>
        <?php
        echo("Número de visitas: $contador");
    }
    else
    {
        $tipoImagen = mime_content_type($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['name'], "img/foto");
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $sexo = $_REQUEST['sexo'];
        if (isset($_REQUEST['carnet']))
            $carnet = $_REQUEST['carnet'];
        if (isset($_REQUEST['pensionista']))
            $pensionista = $_REQUEST['pensionista'];
        if (isset($_REQUEST['experiencia']))
            $experiencia = $_REQUEST['experiencia'];
        if (isset($_REQUEST['discapacidad']))
            $discapacidad = $_REQUEST['discapacidad'];  
        $pais = $_REQUEST['pais'];
        $comentario = $_REQUEST['comentario'];

        echo("El nombre es: $nombre<br>");
        echo("Los apellidos son: $apellidos<br>");
        echo("El sexo es: $sexo<br>");
        echo("Los méritos son: ");
        if (isset($_REQUEST['carnet']))
        echo("$carnet, ");
        if (isset($_REQUEST['pensionista']))
        echo("$pensionista, ");
        if (isset($_REQUEST['experiencia']))
        echo("$experiencia, ");
        if (isset($_REQUEST['discapacidad']))
        echo("$discapacidad, ");
        echo("<br>");
        echo("El pais es: $pais<br>");
        echo("El comentario es: $comentario<br>");
        ?>
        <img src="<?php echo('img/foto')?>">
        <?php
    }
    ?>
</body>
</html>