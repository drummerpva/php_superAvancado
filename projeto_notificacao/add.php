<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost;charset=utf8", "root", "");
} catch (PDOException $ex) {
    die("Erro: " . $ex->getMessage());
}
$prop = array(
    'curtidor' => '2',
    'id_foto' => '123'
);

$sql = $pdo->prepare("INSERT INTO notificacoes (id_user,notificacao_tipo,propriedade,link) VALUES(?,?,?,?)");
$sql->execute(array(1,'CURTIDA', json_encode($prop),"http://www.terra.com.br"));