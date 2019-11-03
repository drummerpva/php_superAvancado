<?php

class Contatos extends model {

    public function getAll() {
        $array = array();
        $sql = $this->db->query("SELECT * FROM contatos");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function addContato($nome, $email) {
        if (!$this->emailExists($email)) {
            $sql = $this->db->prepare("INSERT INTO contatos (nome,email) VALUES(:nome,:email)");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    private function emailExists($email) {
        $sql = $this->db->prepare("SELECT * FROM contatos WHERE email = ?");
        $sql->execute(array($email));
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    private function emailExistsAlterar($email, $id) {
        $sql = $this->db->prepare("SELECT * FROM contatos WHERE email = ? AND id <> ?");
        $sql->execute(array($email, $id));
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delContato($id) {
        $sql = $this->db->prepare("DELETE FROM contatos WHERE id = ?");
        $sql->execute(array($id));
    }

    public function getContato($id) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM contatos WHERE id = ?");
        $sql->execute(array($id));
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }

    public function salvarContato($id, $nome, $email) {
        if (!$this->emailExistsAlterar($email, $id)) {
            $sql = $this->db->prepare("UPDATE contatos SET nome = :nome, email = :email WHERE id = :id");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":id", $id);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

}
