<?php

    session_start();

    $_SESSION['registrado'] = false;

    session_destroy();
    session_unset();

    setcookie('PHPSSID','',time()-60);

    header("location:PaginaPrincipal.php");
?>