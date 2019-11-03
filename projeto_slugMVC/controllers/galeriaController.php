<?php

class galeriaController extends controller {

    public function index() {
        $dados = array(
            'qt' => 129
        );
        $albuns = new Albuns();
        $dados['lista'] = $albuns->getList();
        
        $this->loadTemplate('galeria',$dados);
    }
    public function abrir($slug){
        $dados = array();
        $albuns = new Albuns();
        $dados['album'] = $albuns->getAlbum($slug);
        
        $this->loadTemplate('album',$dados);
    }

}
