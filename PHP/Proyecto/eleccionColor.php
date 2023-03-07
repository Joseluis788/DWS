<?php

    setcookie('color', $_REQUEST['color'], time()+3600, "/");
    header("location:".$_SERVER['HTTP_REFERER']);
?>