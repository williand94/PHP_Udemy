<?php require_once "./includes/redirect.php"; ?>
<?php require_once "./includes/header.php"; ?>
<?php require_once "./includes/sidebar.php"; ?>

<div id="principal">
    <h1>Crear categoria</h1>
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
    <form action="guardar-categoria.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" />
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