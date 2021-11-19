<?php

//Mostrar erroes

function mostrarError($errores, $campo)
{

    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    }

    return $alerta;
}

//Borrar errores y sesiones
function borrarErrores()
{

    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }

    if (isset($_SESSION['success'])) {
        $_SESSION['success'] = null;
        unset($_SESSION['success']);
    }
    
    return $borrado;
}

// Mostrar categorias

function conseguirCategorias($conexion)
{
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);

    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }

    return $result;
}

//Mostrar entradas

function conseguirEntradas($conexion)
{
    $sql = "SELECT e.*, c.nombre AS 'categorias' FROM entradas e
            INNER JOIN categorias c ON e.categoria_id = c.id
            ORDER BY e.id DESC LIMIT 4";

    $entradas = mysqli_query($conexion, $sql);

    $result = array();

    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }

    return $result;
}
