<?php

    function app_autoloader($class)
    {

        $path = "class/".strtolower($class).".php";
        if(file_exists($path))
        {
            require_once $path;
        }else {
            die("El archivo ". strtolower($class)." no existe");
        }
    }

    spl_autoload_register('app_autoloader');