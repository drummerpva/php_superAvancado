<?php
  //classe tem que ser apenas um objeto no sistema todo - será apenas uma instancia
    class Pessoa{
        private $nome;
        private $idade;
        public static function getInstance(){
            static $instance = null;
            if($instance === null){
                $instance = new Pessoa();
            }
            return $instance;
        }
        private function __construct(){
            
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getIdade(){
            return $this->idade;
        }
    }
    
    $cara = Pessoa::getInstance();
    $cara->setNome("Douglas Poma");
    
    
    
    $cara2 = Pessoa::getInstance();
    $cara2->setIdade(27);
    
    
    echo "Idade: ".$cara->getIdade();