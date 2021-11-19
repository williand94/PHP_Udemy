<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'phpmysql';

$conection = mysqli_connect( $host, $user, $pass, $dbName );

//Comprobar si conexion es correcta
if ( mysqli_connect_errno() ) {
    echo'Fallo al intentar concetar: '. mysqli_connect_error();
} else {
    echo'Conexión Succesfull';
}

//Configurar caractéres
mysqli_query( $conection, "SET NAMES 'utf8'" );