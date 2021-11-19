<?php

    $array =  array('nombre' => 'willian' );
    $int = 22;
    $string = "Hora de follar chicas bonitas loco";
    $true = true;

    if(gettype($array) == 'array')
    {
        echo "Es una variable de tipo array <br>";
    }

    if(gettype($int) == 'integer')
    {
        echo "Es una variable de tipo entero <br>";
    }
    if(gettype($string) == 'string')
    {
        echo "Es una variable de tipo String <br>";
    }
    if(gettype($true) == 'boolean')
    {
        echo "Es una variable de tipo booleano ";
    }
    