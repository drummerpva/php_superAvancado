<?php

class Albuns extends model {

    public function getList() {
        $array = array();

        $sql = $this->db->query("SELECT * FROM albuns");
        $array = $sql->fetchAll();

        return $array;
    }

    public function getAlbum($slug) {
        $array = array();

        $sql = $this->db->prepare("SELECT  * FROM albuns WHERE slug = ?");
        $sql->execute(array($slug));
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

}
