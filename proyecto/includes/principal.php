<div id="principal">
    <h1>Últimas entradas</h1>
    <?php 

        $entradas = conseguirEntradas($db);
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <a href="http://" class="input">
                        <h2><?= $entrada['titulo'];?></h2>
                        <span class="date"><?= $entrada['categorias']. " | ". $entrada['fecha']?></span>
                        <p>
                            <?= substr($entrada['descripcion'], 0,192)."..." ;?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        endif;         
    ?>
    <div id="ver-todas">
        <a href="#">Ver todas las entradas</a>
    </div>
</div>