
<?php
try{
    $pdo = new PDO("mysql:dbname=saas;host=localhost;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Erro: ".$ex->getMessage());
}
$dominio = $_SERVER['HTTP_HOST'];
echo "Dominio: ".$dominio;

$sql = "SELECT * FROM usuarios WHERE dominio = :dominio";
$sql = $pdo->prepare($sql);
$sql->bindValue(":dominio",$dominio);
$sql->execute();
if($sql->rowCount() > 0){
    $cliente = $sql->fetch();
    if(file_exists("clientes/".$cliente['id']."/index.php")){
        require "clientes/".$cliente['id']."/index.php";
    }else{
        die("Sistema em desenvolvimento");
    }
}else{
    die("Acesso Negado!");
}
=======
>>>>>>> 997e592147789b151dd86e055146050de51fd4a5
