<?php

//Iniciar la sesión y la conexión a la BBDD
require_once "./includes/conexion.php";

//Recoger los datos del formulario
if (isset($_POST)) {

    //Borrar sesión del error antiguo
    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']);
    }

    //Recoger los datos del formulario
    $email = isset($_POST['email'])    ? trim($_POST['email']) : false;
    $pass  = isset($_POST['password']) ? $_POST['password']       : false;

    //Consulta para consultar credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {

        $usuario = mysqli_fetch_assoc($login);

        //Comprobar contraseña
        $verify = password_verify($pass, $usuario['password']);

        if ($verify) {

            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
        } else {
            //Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Usuario o contraseña erróneos";
        }
    } else {

        //Mensaje de error.
        $_SESSION['error_login'] = "Usuario o contraseña erróneos";
    }
}

//Redirigir al index.php
header("Location: index.php");
