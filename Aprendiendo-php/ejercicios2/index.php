<?php
/* 
Ejercicio 1, realizar un programa que contenga un array de 8 numeros el progrma debe:

*Recorrerlo y mostrarlo.
*Recorrerlo y ordenarlos.
*mostrar la longitud por pantalla.
*buscar algo.
*/

function mostrarArray($numeros){
    $resultado = "";
    
    foreach ($numeros as $numero) {
        // $resultado .= $numero es lo mismo que =>  $resultado = $resultado.$numero
        $resultado .= $numero."<br>";
    }
    return $resultado;
}

$numeros = array(1,2,8,7,6,4,3,5);


echo "<h1>Recorrerlo y mostrarlo</h1>";
/* 
for ($i=0; $i < count($numeros) ; $i++) { 
    //echo($numeros[$i]);
}
 */
//echo mostrarArray($numeros);
echo "<hr>";

echo "<h1>Recorrerlo y ordenarlo</h1>";
//sort($numeros);
//echo mostrarArray($numeros);
echo "<hr>";

echo "<h1>Mostrar la longitud por pantalla.</h1>";
//echo "La longitud del array es: " .count($numeros);


echo "<hr>";

echo "<h1>Buscar algo.</h1>";


if(isset($_GET['numero'])) {
    
    $search = $_GET['numero'];
    $find = array_search($search,$numeros);
    
    if(!empty($find))
    {
        echo "<h3>El número existe en la posición : $find</h3>";
    }else{
        echo"<h3>No existe el número</h3>";
    }
}
    
    echo "<hr>";
    //var_dump($_GET)."<br>";
   