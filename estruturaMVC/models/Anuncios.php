<?php
class Anuncios extends model{
    public function getQuantidade(){
        $sql = $this->db->query("SELECT COUNT(1) as qtd FROM anuncios");
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql["qtd"];
        }else{
            return 0;
        }
            
    }
}