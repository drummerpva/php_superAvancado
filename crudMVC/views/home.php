<h1>Contatos</h1>
<a href="./contatos/adicionar">Adicionar Contato</a>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>

<?php foreach ($contatos as $contato) {
    ?>
    <tr>
        <td><?php echo $contato['id'] ?></td>
        <td><?php echo $contato['nome'] ?></td>
        <td><?php echo $contato['email'] ?></td>
        <td>
            <a href="contatos/editar/<?php echo $contato['id']?>">[ EDITAR ]</a>
            <a href="contatos/excluir/<?php echo $contato['id']?>">[ EXCLUIR ]</a>
        </td>
    </tr>
    <?php
}
?>
</table>