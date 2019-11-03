<?php
if(!empty($_POST['id'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
}else{
    die("Erro!");
}
$pdo;
try {
    $pdo = new PDO("mysql:dbname=projeto_crudoo;host=localhost", "root", "");
} catch (PDOException $ex) {
    echo "Erro na conexao com BD! Erro: " . $ex->getMessage();
}
$sql = $pdo->prepare("UPDATE contatos SET nome = :nome, email = :email WHERE id = :id");
$sql->bindValue(":nome",$nome);
$sql->bindValue(":email",$email);
$sql->bindValue(":id",$id);
$sql->execute();