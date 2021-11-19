<?php

$frase = "    What's up Nigga        ";
var_dump(trim($frase));

$text = true;

if (empty($text)) {
    echo "LA variable no existe , o està vacia";
    
}else {
    echo "Existe la variable";
}
echo "<br>";
//contar una cadena de caractéres 
$cadena = "12345 ";
echo strlen($cadena);
echo "<br>";
//Encontrar una cadena o subcadena dentro de una cadena

$text = "I wanna get a good job , but mor important , i wanna to learn.";
if(strpos($text, "gets")){

    echo strpos($text,"get");
}else {
    echo "No encontrada";
}
echo "<br>";
//Reemplazar palabras.
$text = "I wanna get a good job , but mor important , i wanna to learn.";

$text1 = str_replace("wanna", "Wan to",$text);
echo $text1;
