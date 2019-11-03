<?php

class produtoController extends controller {

    public function index() {
        
    }

    public function abrir($id) {
        $dados = array();
        $a = new Anuncios();
        $us = new Usuarios();
        if (empty($id)) {
            header("Location: ./");
            exit;
        } 
        $info = $a->getAnuncio($id);
        $dados['info'] = $info;
        $this->loadTemplate('produto',$dados);
    }

}
