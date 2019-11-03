<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost;charset=utf8", "root", "");
} catch (PDOException $ex) {
    die("Erro: " . $ex->getMessage());
}

$sql = $pdo->prepare("SELECT * FROM notificacoes WHERE id_user = 1");
$sql->execute();
if($sql->rowCount()>0){
    foreach ($sql->fetchAll() as $item){
        $propriedades = json_decode($item['propriedade']);
        //echo "TIPO: ".$item['notificacao_tipo']."<br>";
        if($item['notificacao_tipo'] == 'MSG'){
            echo "Mensagem: ".$propriedades->msg."<br>";
        }elseif($item['notificacao_tipo'] == 'CURTIDA'){
            echo "Quem curtiu: ".$propriedades->curtidor."<br> Foto: ".$propriedades->id_foto;
        }
        //print_r($propriedades);
        echo "<hr>";
        
    }
}