<?php 
/* Programa que imprima todos los número que hay entre dos números recogidos por el método GET */

    if (isset($_GET["numero"]) && isset($_GET["numero1"])) {
               
        $n1 = $_GET["numero"];
        $n2 = $_GET["numero1"];
        $contador = $n1;
        if ($n2 > $n1) {
            echo"ERROR.El primer número siempre debe ser el mayor!!. ";
        }else{

            while(($contador >= $n1 )&& ($contador <=$n2))
            {
                echo "Los número entre $n1 y $n2, son : ".$contador."<br>";
                $contador ++;    
            }
        }
    }else{
        echo "No hay ningun parámetro en la URL";
    }

    /* 
    SOlución de VIctor Robles
      
    for($i = $numero1; $i <= $numero2;$i++)
    {
        echo $i;
    }
    
    */