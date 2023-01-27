<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <h1 style="color: blue;">Sugerencias para nuestra página web</h1>
    <form action="pagina2.php" method="POST">
        <label>Introduzca su nombre: </label>
        <input type="text" name="nombre">
        <br><br>
        <label>Comentarios sobre esta página web: </label>
        <textarea name="comentario" cols="30" rows="5"></textarea>
        <br><br>
        <input type="submit" name="enviar">
    </form>
</body>
</html>