<?php

    function app_autoloader($class)
    {


        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $path = 'classes/'.$class.'.php';

        /* $class = str_replace('//', DIRECTORY_SEPARATOR, $class);
        //$path = "classes/".$class.".php";
        $path = 'classes/'.$class. '.php';
        */
        if(file_exists($path))
        {
            require_once $path;
        }else {
            die("El archivo ". $class." no existe");
        }
    }
        
    spl_autoload_register('app_autoloader');


    