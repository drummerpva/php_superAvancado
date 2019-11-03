<?php
class Aulas extends model{
    public function getAulas($modulo){
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM aulas WHERE id_modulo = ?");
        $sql->execute(array($modulo));
        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
}