<?php
require_once "./includes/config/config.php";
    

    $db = mysqli_connect( $server, $username, $password, $databases );

    mysqli_query($db,"SET NAMES 'utf8' ");

    if (!isset($_SESSION)) {
        session_start();
        
    }