<?php

    $arr[]=array(
        "almeria",
        "granada",
        "barcelona"
    );

    $param = $_REQUEST["param"];

    $sugerencia = "";

    if($param !== "")
    {
        $param=strtolower($param);
    }

    $len = strlen($param);

    foreach ($arr as $ciudad) 
    {
        if(strtr($param, substr($nombre, 0 , $len)));
    }

?>