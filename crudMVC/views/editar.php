<h3>Editar Contato</h3>
<?php
if (empty($contato)) {
    die("Contato não encontrado! <a href='" . BASE_URL . "'>Voltar</a>");
}
if ($error == "exist") {
    ?>
    <div class="aviso">
        E-mail ja existente! Tente outro...
    </div>
    <?php
}
?>
<form method="POST" action="<?php echo BASE_URL;?>contatos/editSalvar">
    Nome:<br/>
    <input type="text" name="nome" required value="<?php echo $contato['nome']; ?>"/><br/><br/>
    E-mail:<br/>
    <input type="email" name="email" required value="<?php echo $contato['email']; ?>"/><br/><br/>
    <input type="submit" value="Salvar" />
    <input type="hidden" name="id" value="<?php echo $contato['id']; ?>" />
</form>