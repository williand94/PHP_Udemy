<?php

//Verificar si una variable está vacía , y si lo está rellenarla y  mostrar su texto en pantalla convertido en mayúsculas.

$cadena = "";

if(empty($cadena))
{
    $cadena = "hola mundote";
    echo "La variable cadena a sido rellenada " ."<strong>".strtoupper($cadena)."</strong>";

}
