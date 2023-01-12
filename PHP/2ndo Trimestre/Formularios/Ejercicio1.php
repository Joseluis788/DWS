<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Formulario simple</h2><br>
    <h3>Búsqueda de canciones</h3><br>
    <form action="Ejercicio1-resultados.php" method="post">
        <label>Texto a buscar: </label>
        <input type="text" name="busqueda" size="20">
        <br><br>
        <label>Buscar en: </label>
        <input type="radio" name="tipo" value="titulo" checked>Titulo de la canción
        <input type="radio" name="tipo" value="album">Nombre del álbum
        <input type="radio" name="tipo" value="ambos">Ambos campos
        <br><br>
        <label>Género musical: </label>
        <select name="genero">
            <option value="Todos" selected>Todos</option>
            <option value="Acústica">Acústica</option>
            <option value="Banda Sonora">Banda Sonora</option>
            <option value="Blues">Blues</option>
            <option value="Electrónica">Electrónica</option>
            <option value="Folk">Folk</option>
            <option value="Jazz">Jazz</option>
            <option value="New Age">New Age</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
        </select>
        <br><br>
        <input type="submit" name="enviar">
    </form>
</body>
</html>