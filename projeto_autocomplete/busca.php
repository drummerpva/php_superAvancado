<?php
$array = array();
if(!empty($_POST['texto'])){
    
    try{
        $pdo = new PDO("mysql:dbname=projeto_autocomplete;host=localhost;charset=utf8","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare("SELECT * FROM pessoas WHERE nome LIKE ?");
        $sql->execute(array("%".$_POST['texto']."%"));
        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $pessoa){
                //echo $pessoa['nome']."<br/>";
                $array[] = array('nome' => $pessoa['nome'], 'id' => $pessoa['id']);
            }
        }
    } catch (PDOException $ex) {
        die("Erro: ".$ex->getMessage());
    }
 
}
echo json_encode($array);