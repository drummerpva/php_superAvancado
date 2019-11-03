<h2>Albuns</h2>

<ul>
    <?php foreach ($lista as $albun) {
        ?>
    <li><a href="./galeria/abrir/<?php echo $albun['slug'];?>"><?php echo $albun['titulo'];?></a></li>
        <?php
    }
    ?>

</ul>