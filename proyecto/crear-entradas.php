<?php require_once "./includes/redirect.php"; ?>
<?php require_once "./includes/header.php"; ?>
<?php require_once "./includes/sidebar.php"; ?>

<div id="principal">
    <h1>Crear entradas</h1>
    <?php if (isset($_SESSION['errores']['categoria'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['categoria'] ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['success'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['registro'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['registro'] ?>
        </div>
    <?php endif; ?>
    <form action="guardar-entradas.php" method="POST">

        <label for="titulo">Título</label>
        <input type="text" name="titulo" />
        <label for="descripcion">Descripción</label>
        <textarea cols="82" name="descripcion"></textarea>
        <label for="categoria">Categoría</label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)) :
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
        <option value="<?= $categoria['id'];?>">
                    <?= $categoria['nombre'];?>
        </option>            
            <?php endwhile;
                  endif;
            ?>
        </select>
        <input type="submit" value="Guardar!">
    </form>
</div>
<?php
/*     if (isset($_SESSION['errores']['categoria'])) {
        unset($_SESSION['errores']['categoria']);
    } */
?>
<?php borrarErrores(); ?>
<?php require_once "./includes/footer.php"; ?>