<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost;charset=utf8", "root", "");
} catch (PDOException $ex) {
    die("Erro: " . $ex->getMessage());
}
$sql = $pdo->prepare("SELECT * FROM notificacoes WHERE id_user = :user AND lido = 0");
$sql->bindValue("user", 1);
$sql->execute();
$array = array("qt"=>0);
if ($sql->rowCount() > 0) {
    $array['qt'] = $sql->rowCount();
}
echo json_encode($array);
