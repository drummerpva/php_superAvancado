<?php

class Fotos extends model {

    public function getFotos() {
        $array = array();

        $sql = $this->db->query("SELECT * FROM fotos ORDER BY id DESC");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
    public function saveFotos(){
        if(!empty($_FILES['arquivo'])){
           $permitidos = array("image/jpeg","image/jpg","image/png"); 
            if(in_array($_FILES['arquivo']['type'], $permitidos)){
                $nome = md5(time().rand(0, 999)).".jpg";
                move_uploaded_file($_FILES['arquivo']['tmp_name'], "./assets/images/galeria/".$nome);
                $titulo ="";
                if(!empty($_POST['titulo'])){
                    $titulo = addslashes($_POST['titulo']);
                }
                $sql = $this->db->prepare("INSERT INTO fotos (titulo,url) VALUES(:titulo,:url)");
                $sql->bindValue(":titulo",$titulo);
                $sql->bindValue(":url",$nome);
                $sql->execute();
            }
        }
    }

}
