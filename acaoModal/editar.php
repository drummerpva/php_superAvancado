<?php
sleep(2);
if(!empty($_POST['id'])){
    $id = $_POST['id'];
}
$pdo;
try {
    $pdo = new PDO("mysql:dbname=projeto_crudoo;host=localhost", "root", "");
} catch (PDOException $ex) {
    echo "Erro na conexao com BD! Erro: " . $ex->getMessage();
}
$sql = $pdo->query("SELECT * FROM contatos WHERE id = $id");
if($sql->rowCount() > 0){
    $info = $sql->fetch();
    ?>
<form method="POST">
    Nome: <br/>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>" class="form-control"/><br/><br/>
    E-mail: <br/>
    <input type="email" name="email" value="<?php echo $info['email'];?>" class="form-control"/><br/><br/>
    <input type="submit" value="Salvar" class="btn btn-info"/>
    <input type="hidden" name="id" value="<?php echo $info['id'];?>"
</form>
        
        <?php
    
    
}
?>