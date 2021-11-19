<?php 

/* funciones con array
*asort() sirve para ordenar los elementos de un array alfabéticamente.

*asort() sirve para ordenar los elementos de un array alfabéticamente, pero de forma inversa.

*array_push($team,"D'Andre ") añadir elementos al array

*array_pop($team) elimina el último elemento de un array

*unset($team["kd"]) elimina un elmento en concreto, pasado por parámetro.

*array_rand($team) escoge o saca un elemento aleatorio.

*array_reverse($team) voltea un array.

*array_search("kd",$team) Me permite buscar dentro de un array.
  
*/

$team =  array('KD','James Harden','Blake Griffin','Kyrie Irving');
array_push($team,"D'Andre ") ;
var_dump($team);
echo "<hr>";


$array = array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');

$clave = array_search('verde', $array); // $clave = 2;
$clave1 = array_search('rojo', $array);  // $clave = 1;
echo $clave."<br>";
echo $clave1;
