<table width="300px">
    <?php foreach ($lista as $item) {
        ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['titulo']; ?></td>
        </tr>

        <?php
    }
    ?>
</table>
<?php  for($q=1;$q<=$paginas;$q++){
    ?>
<a href="<?php echo "./?p=".$q;?>"<?php echo ($q == $paginaAtual) ? "style='font-size:20px'":"";?>><?php echo $q;?></a>
        <?php
}
?>