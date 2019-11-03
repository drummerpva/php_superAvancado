<?php

class galeriaController extends controller {

    public function index() {
        $dados = array(
            'qt' => 129
        );
        
        $this->loadTemplate('galeria',$dados);
    }
    public function abrir($id,$titulo){
        echo "ID: ".$id."<br> Titulo: ".$titulo; 
    }

}
