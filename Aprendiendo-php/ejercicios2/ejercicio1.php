<?php

//*array_push($team,"D'Andre ") añadir elementos al array

/* $array = array();
$i = 0;

while (count($array) < 120) {
    
    array_push($array,$i);
    $i++;
}
foreach($array as $datos){
    echo " Agregamos el dato: " .$datos."<br>";
}

 */

 //Ejercicio 1.Escribir un programa en php que añada elementos a un array mientras que su longitud sea menor a 120.


 $playerTeam = array('Kevin Durant','Blake Griffin','Kyrie Irving','D Andre Jordan','Lamarcus Aldridge');

 $show ="";
 if(count($playerTeam) < 120)
{  
    array_push($playerTeam,'Carmelo Anthony');
    array_push($playerTeam,'Derrick Rose');

    foreach ($playerTeam as $player ) {
        $show .= $player."<br>";

    }
    echo "<h1>". $show ." </h1>";
    
}else{
    echo "<h1> Longitud de la plantilla excedida</h1>";
}