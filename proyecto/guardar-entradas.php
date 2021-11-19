<?php

    if(isset($_POST)){
            
        if (!isset($_SESSION)) {
            session_start();
        }
        require_once "./includes/conexion.php";
        
        $titulo      = isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']): false;
        $descripcion = isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']): false;
        $categoria   = isset($_POST['categoria'])? (int)$_POST['categoria'] : false;
        $usuario_id  = $_SESSION['usuario']['id'];
        
        //Validación 

        $errores = array();

        if (empty($titulo)) {  $errores['titulo'] = 'El título está vacío'; }
        if (empty($descripcion)) {  $errores['descripcion'] = 'El título está vacío'; }
        if (empty($titulo) && !is_numeric($categoria)) {  $errores['titulo'] = 'El título está vacío'; }

        if(count($errores) == 0){

            $sql = "INSERT INTO entradas VALUES(NULL,$usuario_id,$categoria,'$titulo','$descripcion',CURDATE())";
            $query = mysqli_query($db,$sql);

            
        }else {
            $_SESSION['errores_entrada'] = $errores;
        }


    }

    header("Location: index.php");
