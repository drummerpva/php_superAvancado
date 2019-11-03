<?php
    class homeController extends controller{
        public function index(){
            $dados = array();
            $this->loadTemplate('home',$dados);
        }
        public function testar(){
            echo "123";
        }
        
    }
