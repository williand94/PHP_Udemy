<?php

if (isset($_POST)) {

    require_once "./includes/conexion.php";

    if (!isset($_SESSION)){
        session_start();
    }
    //Sanitizamos y recibimos datos del formulario de registro.
    $name  = isset($_POST['name'])    ?  mysqli_real_escape_string($db,$_POST['name']) : false;
    $app   = isset($_POST['app'])     ?  mysqli_real_escape_string($db,$_POST['app']) : false;
    $email = isset($_POST['email'])   ?  mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $pass  = isset($_POST['password'])?  mysqli_real_escape_string($db,$_POST['password']) : false;

    $errores = array();

    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $validate_name = true;
    
    } else {
        $validate_name = false;
        echo  $errores['name'] = "El nombre no es válido";
    }

    if (!empty($app) && !is_numeric($app) && !preg_match("/[0-9]/", $app)) {
        echo $validate_app = true;
   
    } else {
        $validate_app = false;
        echo  $errores['app'] = "El apellido no es válido";
    }

    if (!empty($email) && !is_numeric($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $validate_email = true;
    
    } else {
        $validate_name = false;
        echo  $errores['email'] = "El email no es válido";
    }
    
    if (!empty($pass) && strlen($pass) > 6 ) {
        $validate_password = true;
    
    } else {
        $validate_name = false;
        echo  $errores['password'] = "La contraseña está vacía, o no cumple con el tamaño mínimo";
    }

    $save_user = false;
    
    if (count( $errores ) == 0) {
        $save_user = true;

        //Cifrar contraseña. 
        $password_crypt = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);

        //Insertar Datos.
        $sql = "INSERT INTO usuarios VALUES(NULL,'$name','$app','$email', '$password_crypt', CURDATE())";
        $query = mysqli_query($db,$sql);

        if ($query) {
            $_SESSION['success'] = "Registro realizado.";
        
        }else {
            
            $_SESSION['errores']['general'] = "Fallo al insertar usuario";
            
        }

    }else {
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');
