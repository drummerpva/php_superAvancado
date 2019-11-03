<?php
class Itens extends model{
    public function getList($offset,$limit){
        $array = array();
        $sql = $this->db->query("SELECT * FROM items LIMIT $offset, $limit");
        if($sql->rowCount()> 0){
            $array = $sql->fetchAll();
        }
        
        
        return $array;
        
    }
    public function getTotal(){
        $sql = $this->db->query("SELECT count(1) c FROM items");
        $sql = $sql->fetch();
        return $sql['c'];
    }
}