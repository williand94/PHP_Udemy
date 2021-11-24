<?php

    try {

        if(isset($_GET['id']))
        {
            echo "<h1>EL parámetro es {$_GET['id']} <h1>";
        }else{

            throw new  Exception('The code Has had an error  ');
        }
    } catch (Exception $e) {
        echo "An error has occred! ".$e->getMessage(); 
    }