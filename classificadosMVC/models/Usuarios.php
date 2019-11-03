<?php

class Usuarios extends model{

    public function getTotalUsuarios(){
            $sql = $this->db->query("SELECT count(1) as total FROM usuarios");
            if($sql->rowCount()>0){
                $sql = $sql->fetch();
                return $sql['total'];
            }
        }
    
    public function cadastrar($nome, $email, $senha, $telefone = '') {
        $sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() == 0) {
            $sql = $this->db->prepare("INSERT INTO usuarios(nome,email,senha,telefone) VALUES(:nome, :email, :senha, :telefone)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->bindValue(':telefone', $telefone);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    public function login($email,$senha){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(':email',$email);
        $sql->bindValue(':senha',$senha);
        $sql->execute();
        if($sql->rowCount()>0){
            $sql = $sql->fetch();
            $_SESSION['cLogin'] = $sql['id'];
            return true;
        }else{
            return false;
        }
    }
    public function getUsuario($id){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $sql->execute(array($id));
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql;
        }
    }

}