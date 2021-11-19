<?php
$ruta_1 = '/opt/lampp/htdocs/Master-Php/Master-en-PHP/Aprendiendo-php/21-directorios/prueba/';

if (!file_exists($ruta_1.'prueba1.php')) {    
    fopen($ruta_1.'prueba1.php','a+');
    echo'Fichero creado correctamente';
    
}else {
    echo'El fichero ya existe!';
}
echo"<hr>";

$ruta = '/opt/lampp/htdocs/Master-Php/Master-en-PHP/Aprendiendo-php/21-directorios/';
if(!file_exists($ruta."prueba1/"))
{
    mkdir($ruta."prueba1/",777,umask(0));
    echo "Directorio creado correctamente"."<br>";
    echo"<hr>";
}else {
    echo "Ya existe el directorio"."<br>";
    echo"<hr>";
}

if ($gestor = opendir('./prueba')) {
    while (($archivo = readdir($gestor)) !== false) {
        if ($archivo !== '.' && $archivo !=='..') {
            /* lOS PUNTOS HACEN REFERENCIA A LOS DIRECTORIOS PADRES E HIJO.PADRE=.. E HIJO=. */
            echo $archivo."<br>";
        }    
    }
}