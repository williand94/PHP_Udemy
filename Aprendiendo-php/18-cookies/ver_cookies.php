<?php


if (isset($_COOKIE['micookie'])) {
        
    echo $_COOKIE['micookie']."<br>";
}else {
    echo "no existe cookie "."<br>";
}



if (isset($_COOKIE['oneYear'])) {
        
    echo $_COOKIE['oneYear']."<br>";
}else {
    echo "no existe cookie "."<br>";
}
?>

<a href="crear_cookie.php">Make cookiea</a>
<a href="borrar_cookie.php">I GONNA TO DELETE COOKIES</a>
