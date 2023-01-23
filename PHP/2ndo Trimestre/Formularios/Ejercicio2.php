<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2 style="color: blue;">Elementos de entrada</h2>
    <h3 style="font-style: italic;">Elementos de tipo INPUT</h3>
    <div style="width: 50%">
        <form action="Ejercicio2-resultados.php" method="post" ENCTYPE="multipart/form-data>">
            <h4>TEXT</h4>
            <label>Introduzca la cadena a buscar: </label>
            <input type="text" value="valor por defecto" name="busqueda" size="20">
            <?php
                if(isset($_REQUEST['enviar']) && empty(trim($_REQUEST['busqueda'])))
                echo("<span style='color:red;'> Debes introducir una búsqueda!! </span>");
            ?>
            <hr>
            <h4>RADIO</h4>
            <label>Sexo: </label>
            <input type="radio" name="sexo" checked value="Mujer">Mujer
            <input type="radio" name="sexo" value="Hombre">Hombre
            <hr>
            <h4>CHECKBOX</h4>
            <label>Extras: </label>
            <input type="checkbox" name="extras[]" value="Garaje">Garaje
            <input type="checkbox" name="extras[]" value="Piscina">Piscina
            <input type="checkbox" name="extras[]" value="Jardín">Jardín
            <hr>
            <h4>FILE</h4>
            <label>Fichero: </label>
            <input type="file" name="fichero">
            <hr>
            <h4>HIDDEN</h4>
            <input type="hidden" name="hidden" value="hidden">
            <hr>
            <h4>PASSWORD</h4>
            <label>Contraseña: </label>
            <input type="password" name="password">
            <hr>
            <h3>Elementos de tipo SELECT</h3>
            <h4>SELECT SIMPLE</h4>
            <label>Color: </label>
            <select name="color">
                <option value="Rojo" selected>Rojo</option>
                <option value="Azul">Azul</option>
                <option value="Amarillo">Amarillo</option>
                <option value="Rosa">Rosa</option>
                <option value="Verde">Verde</option>
            </select>
            <hr>
            <h4>SELECT MÚLTIPLE</h4>
            <label>Idiomas: </label>
            <select name="idiomas[]" MULTIPLE size="3">
                <option value="Inglés" selected>Inglés</option>
                <option value="Español">Español</option>
                <option value="Japonés">Japonés</option>
            </select>
            <hr>
            <h3>Elemento TEXTAREA</h3>
            <label>Comentario: </label>
            <textarea name="comentario" cols="40" rows="6">Este libro me parece...</textarea>
            <hr>
            <input type="submit" name="enviar" value="Enviar datos">
            <input type="reset" name="borrar" value="Borrar datos">
        </form>
    </div>
</body>
</html>