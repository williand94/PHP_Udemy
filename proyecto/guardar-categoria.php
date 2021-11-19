<?php
if (isset($_POST)) {

    require_once "./includes/conexion.php";

    $nombreCategoria = mysqli_real_escape_string($db, $_POST['nombre']);

    if (!empty($nombreCategoria)) {
        # code...
        $sql = "SELECT * FROM categorias WHERE nombre = '$nombreCategoria'";
        $categorias = mysqli_query($db, $sql);

        if ($categorias && mysqli_num_rows($categorias)) {
            echo "Categoria ya registrada!";
            $_SESSION['errores']['categoria'] = "La categoria ya existe";
        } else {

            $sql = "INSERT INTO categorias VALUES(NULL,'$nombreCategoria')";
            $insert = mysqli_query($db, $sql);

            if ($insert) {
                $_SESSION['success'] = "Registro realizado";
            } else {
                $_SESSION['errores']['registro'] = "Error en el registro";
            }
        }
    }else {
        $_SESSION['errores']['registro'] = "Debes ingresar una categoría";
    }
}
header("Location: crear-categoria.php");
