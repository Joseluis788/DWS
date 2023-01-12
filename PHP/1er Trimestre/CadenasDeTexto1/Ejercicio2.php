<!DOCTYPE html>
<html lang="en">
<body>
    <form action="Ejercicio2.php">
        <p>Correo: <input type="text" name="correo"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>


<?php
if (isset($_GET['correo']))
{
    if (str_contains($_GET['correo'], "@"))
        echo("Bien, tu correo tiene un @ <br>");
    
    else
        echo("Tu correo no contiene un @ <br>");

    if (str_contains($_GET['correo'], "."))
        echo("Bien, tu correo tiene un . <br>");
    else
        echo("Tu correo no tiene un . <br>");

    if (str_contains($_GET['correo'], "@"))
        if (str_contains($_GET['correo'], "."))
        {
            $empiezaArroba = strcspn($_GET['correo'], '@');
            $usuario = substr($_GET['correo'], 0, $empiezaArroba);
            $dominio = substr($_GET['correo'], $empiezaArroba);
        }    
    if (isset($usuario))
    {
        echo ("Tu nombre de usuario es: ". $usuario. "<br>");
        echo ("Tu dominio es: ". $dominio. "<br>");
    }   
}
?>