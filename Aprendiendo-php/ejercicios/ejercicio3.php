<?php
    $operacion= $_GET["operacion"]; 
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];

    if(isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["operacion"]) )
    {        
        
        switch ($operacion) {
            case 'suma':
                echo ($n1+$n2);
                break;
            case 'resta':
                echo ($n1-$n2);
                break;    
            case 'multiplicacion':
                echo ($n1*$n2);
                break; 
            case 'division':
                echo ($n1/$n2);
                break;    
                
            default:
                echo "Operación incorrecta!";
                break;
        }
    }else{
        echo"Debe llenar todos los campos para poder operar";
    }