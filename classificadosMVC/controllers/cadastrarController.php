<?php
    class cadastrarController{
        public function index(){
            $dados = array();
            
            $this->loadTemplate('cadastrese',$dados);
        }
    }