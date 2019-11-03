<?php

class contatosController extends controller {

    public function adicionar() {
        $dados = array();
        $dados['error'] = '';
        if (!empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }
        $this->loadTemplate("add", $dados);
    }

    public function addSalvar() {
        if (!empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $c = new Contatos();

            if ($c->addContato($nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: ./adicionar?error=exist");
            }
        } else {
            header("Location: ./adicionar");
        }
    }

    public function excluir($id) {
        if (!empty($id)) {
            $c = new Contatos();
            $c->delContato($id);
            header("Location: " . BASE_URL);
        } else {
            header("Location: " . BASE_URL);
        }
    }

    public function editar($id) {
        if(empty($id)){
            header("Location: " . BASE_URL);
        }
        $dados = array();
        $dados['error'] = '';
        if (!empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }
        $c = new Contatos();
        $dados['contato'] = $c->getContato($id);
        $this->loadTemplate('editar', $dados);
    }

    public function editSalvar() {
        if (!empty($_POST['nome'])) {
            $id = addslashes($_POST['id']);
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $c = new Contatos();
            if ($c->salvarContato($id, $nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: ./editar/$id?error=exist");
            }
        }
    }

}
