<?php
    // inicio la sesión
    session_start();
    // Pongo registrado en false y destruyo la sesión
    $_SESSION['registrado'] = false;

    session_destroy();
    session_unset();

    setcookie('PHPSESSID','',time()-60);
    // Le redirijo a la página princiapl
    header("location:../paginas/paginaPrincipal.php");
?>