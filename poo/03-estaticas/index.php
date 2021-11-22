<?php

    require_once "configuracionStatic.php";

    $config = new ConfiguracionStatic();

    echo ConfiguracionStatic::setColor("Morado");
    echo ConfiguracionStatic::getColor()."<br>";

    echo $config::getColor()."<br>";

    echo $config::URL;
    //var_dump($config);