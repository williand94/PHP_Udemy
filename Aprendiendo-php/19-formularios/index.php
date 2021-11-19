<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formularios</title>
</head>
<body>
    <h1>Validar Formularios en PHP</h1>
    <?php

    $prueba=$_GET['prueba'];
    echo $prueba;
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
        switch ($error) {
            case 'faltan valores':
                echo"<strong style='color:red;'>Error, debes llenar todos los campos!</strong>";
                break;

            case 'nombre':
                echo"<strong style='color:red;'>Error al llenar el campo nombre!</strong>";
                break;
            
            case 'apellido':
                echo"<strong style='color:red;'>Error al llenar el campo apellido!</strong>";
                break;    
           
            case 'edad':
                echo"<strong style='color:red;'>Error. No se pueden ingresar edades negativas!</strong>";
                break;

            case 'email':
                echo"<strong style='color:red;'>Error al llenar el campo email</strong>";
                break;    

            case 'password':
                echo"<strong style='color:red;'>La contraseña debe ser mayor de 5 caractéres</strong>";
                break;    
                    
            default:
                echo"<strong style='color:red;'>Error al llenar los campos del formulario</strong>";
                break;
        }
    }
?>
    <form action="validar.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z ]+"><br>
        <label for="apellido">Apellido:</label><br>
        <input type="text" name="apellido" required="required" pattern="[a-zA-Z ]+"><br>
        <label for="edad"edad>Edad:</label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" required="required"><br>
        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass" required="required"><br>
        <input type="submit" value="Enviar!">  
    </form>
</body>
</html>

<?php


?>