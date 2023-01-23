<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1 style="color: blue;">Subida de Ficheros</h1>
    <h3 style="font-style: italic;">Insertar nueva noticia</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" ENCTYPE="multipart/form-data">
        <label>Título: </label>
        <input type="text" name="titulo">
        <br><br><br>
        <label>Texto: </label>
        <br>
        <textarea name="texto" cols="30" rows="5">Insertar texto...</textarea>
        <br><br><br>
        <label>Categoría: </label>
        <select name="categoria">
            <option value="promociones" selected>Promociones</option>
            <option value="trabajo">Trabajo</option>
            <option value="internacional">Internacional</option>
        </select>
        <br><br><br>
        <label>Imagen: </label>
    </form>
</body>
</html>