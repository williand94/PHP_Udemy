
<?php require_once "conexion.php"; ?>
<?php require_once "helpers.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Video Juegos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <header id="header">
        <div id="logo">
            <a href="http:index.php">
                Blog de Videojuegos
            </a>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                $categorias = conseguirCategorias($db);
                if (!empty($categorias)) :
                    while ($categoria = mysqli_fetch_assoc($categorias)) :
                ?>
                        <li>
                            <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre']; ?></a>
                        </li>
                <?php
                    endwhile;
                endif;
                ?>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
<div id="container">
