<?php
/* 
    Cookies: es un fichero que  se almacena en el ordenador del usuario que visita la web.
    con el fin de recordar daros o información, rastrear el comportamiento del mismo en la Web.
*/

//Crear una cookie
//setcookie("nombre","valor que solo puede tener texto",caducidad,ruta,dominio);

//Cookie básica
setcookie("micookie","Valor de mi cookie")."<br>";

//Cookie con expiración
setcookie("oneYear","Valor de mi cookie durante un año",time()+(60*60*24*365))."<br>";
header('location: ver_cookies.php');


?>


        