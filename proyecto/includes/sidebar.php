<?php // session_start(); 
?>

<aside id="sidebar">
    <?php if (isset($_SESSION['usuario'])) : ?>
        <div class="usuario-logueado">

            <h3><?php echo  "Bienvenido(a): " . $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellidos']; ?></h3>
            <!-- Botones -->
            <a href="crear-entradas.php" class="boton"> Crear Entradas</a>
            <a href="crear-categoria.php" class="boton"> Crear categorías</a>
            <a href="mis-datos.php" class="boton"> Mis datos</a>
            <a href="cerrar.php" class="boton"> Cerrar Sesión</a>
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])) : ?>
        <div id="login" class="block-aside">

            <h3>Identidícate</h3>
            <?php if (isset($_SESSION['error_login'])) : ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" />
                <label for="password">Password</label>
                <input type="password" name="password" />
                <input type="submit" value="Entrar!">
            </form>
        </div>

        <div id="register" class="block block-aside">

            <?php if (isset($_SESSION['errores'])) : ?>
                <?php //var_dump($_SESSION['errores']); 
                ?>
            <?php endif; ?>

            <h3>Registrate</h3>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alerta alerta-exito">
                    <?php echo $_SESSION['success'] ?>
                </div>
            <?php elseif (isset($_SESSION['errores']['general'])) : ?>
                <div class="alerta alerta-error">
                    <?php echo $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <form action="register.php" method="post">
                <label for="name">Nombre</label>
                <input type="text" name="name" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'name') : '' ?>
                <label for="app">Apellido</label>
                <input type="text" name="app" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'app') : '' ?>

                <label for="email">Email</label>
                <input type="email" name="email" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>

                <label for="password">Password</label>
                <input type="password" name="password" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>


                <input type="submit" name="submit" value="Registrar!">

            </form>
            <?php borrarErrores(); ?>
        </div>
    <?php endif; ?>
</aside>