<?php
$id = $_POST['id'];
$pdo;
try {
    $pdo = new PDO("mysql:dbname=projeto_crudoo;host=localhost", "root", "");
} catch (PDOException $ex) {
    echo "Erro na conexao com BD! Erro: " . $ex->getMessage();
}
$sql = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
$sql->execute(array($id));