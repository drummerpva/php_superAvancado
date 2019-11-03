<?php
if(!empty($_POST['email'])){
    try{
        $pdo = new PDO("mysql:dbname=projeto_loginajax;host=localhost;charset=utf8","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $sql->execute(array($_POST['email'],md5($_POST['senha'])));
        if($sql->rowCount() > 0){
            echo "S";
        }else{
            echo "N";
        }
    } catch (PDOException $ex) {
        die("Erro: ".$ex->getMessage());
    }
}