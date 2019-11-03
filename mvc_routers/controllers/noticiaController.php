<?php

class noticiaController extends controller {

    public function index() {
        $dados = array(
            'qt' => 129
        );
        
        $this->loadTemplate('galeria',$dados);
    }
    public function abrir($id){
        echo "ID da noticia: ".$id; 
    }
    public function abrirtitulo($titulo){
        echo "Titulo da noticia: ".$titulo; 
    }

}
