<?php
 //Abrir archivo
$archivo = fopen("fichero.txt","a+");


//Leer  todas las líneas del archivo
//fgets("sirve para leer el fichero")
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br>";    
}
//Escribir en archivo
fwrite($archivo,"Besarla como si no hubiese un mañana!."."\n");





//Cerrar archivo
fclose($archivo);

//copiar
//copy("fichero.txt","copia.txt"); 

//Cambiar nombre
//rename("copia.txt","beautiful.txt");

//eliminar fichero/
//unlink("beautiful.txt") or die("Error al elminar");

//Ver si existe un archivo

/* if (file_exists('fichero.txt')) {
    echo"El fichero existe";
}else {
    echo"No existe fichero";
} */