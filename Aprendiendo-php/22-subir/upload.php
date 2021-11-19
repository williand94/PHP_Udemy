<?php


$archivo = $_FILES['archivo'];
$nombre  = $archivo['name'];
$tipo    = $archivo['type'];
$tmp     = $archivo['tmp_name'];

if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif') {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }
    move_uploaded_file($tmp, 'images/'.$nombre);

        header("Refresh: 5; URL=index.php");
    echo"<h1>Imagen cargada correctamente.</h1>";  
}else {
    header("Refresh: 5; URL=index.php");
    echo"<h1>Por favor escoge un formato de imagen válido.</h1>";
}

 /* var_dump($_FILES);
die();  */