<h3>Adicionar Contato</h3>
<?php if($error == 'exist'){
    ?>
<div class="aviso">
    E-mail ja existente! Tente outro...
</div>
        <?php
}
?>
<form method="POST" action="addSalvar">
    Nome:<br/>
    <input type="text" name="nome" required /><br/><br/>
    E-mail:<br/>
    <input type="email" name="email" required/><br/><br/>
    <input type="submit" value="Adicionar"/>
</form>