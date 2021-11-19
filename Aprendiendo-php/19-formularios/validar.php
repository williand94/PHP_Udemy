<?php
    $error = 'faltan valores';
    if (!empty($_POST)){

        if (empty($_POST['nombre'])  || empty($_POST['apellido']) ||empty($_POST['edad']) ||
            empty($_POST['email'])   || empty($_POST['pass']))
        {
            header("Location: index.php?error=$error");
        }else {
            $error = 'ok';
            $nombre   = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad     = (int)$_POST['edad'];
            $email    = $_POST['email'];
            $pass     = $_POST['pass'];

            //Validar nombre
            if (!is_string($nombre) || preg_match("/[0-9]+/",$nombre)) {
                $error = 'nombre';
            }
            if (!is_string($apellido) || preg_match("/[0-9]+/",$apellido)) {
                $error = 'apellido';
            }
            //Edad
            if (!is_integer($edad) || !filter_var($edad,FILTER_VALIDATE_INT) || $edad < 0) {
                $error = 'edad';
            }
            //Email
            if (!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error = 'email';
            }
            //Password
            if (empty($pass) || strlen($pass) < 5 ) {
                $error = 'password';
            }
           /*  var_dump($_POST);
            var_dump($error);
            die(); */
            
        }
        if ($error != 'ok') {
            header("Location: index.php?error=$error");
                
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación</title>
</head>
<body>
    <h1>Datos Registrados:</h1>
    <?php if($error = 'ok'):?>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
       <?php endif; ?>    
</body>
</html>