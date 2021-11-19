<?php

   /*  function tabla($numero){
        echo "<h3> Tabla de multiplicar de l numero : $numero</h3>";

        for ($i=0; $i <=10 ; $i++) { 
            $operacion = $numero * $i;
            echo "$numero x $i = ". $operacion ."<br>";

        }
    }

    for ($i=0; $i <=10 ; $i++) { 
        tabla($i);
    }
 */

 function calculadora($nummero1,$numero2,$negrita=false){
     $suma = $nummero1 + $numero2;
     $resta = $nummero1 - $numero2;
     $division = $nummero1 / $numero2;
     $multiplicacion = $nummero1 * $numero2;

     $cadena_texto = "";

     if ($negrita) {
        $cadena_texto .="<h1>";
     }

     $cadena_texto .= "Suma: $suma<br>";
     $cadena_texto .= "Resta: $resta<br>";
     $cadena_texto .= "División: $division<br>";
     $cadena_texto .= "Multiplicación: $multiplicacion<br>";
     if ($negrita) {
        $cadena_texto .="</h1>";
     }
     $cadena_texto .="<hr>";

     //var_dump($cadena_texto);

     
     return $cadena_texto;
 }

 // echo calculadora(23,23);

 function getname($Name){
    $name = "Your name es $Name ";
    return $name;
 }
 
 function getApellidos($apellido){
     
    $lastName ="Your last name is $apellido"; 
    return $lastName;    
 }

 function fullname($nombre,$apellido){

    $name = getname($nombre)."<br/>" . getApellidos($apellido);
    return $name;
}
 echo fullname("Willian","Vallecilla");



