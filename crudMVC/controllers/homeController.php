<?php
    class homeController extends controller{
        public function index(){
            $dados = array();
            $c = new Contatos();
            $dados['contatos'] = $c->getAll();
            
            $this->loadTemplate('home',$dados);
        }
        
    }
