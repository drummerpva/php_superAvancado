<?php
    class homeController extends controller{
        public function index(){
            $dados = array();
            $modulos = new Modulos();
            $dados['modulos'] = $modulos->getList();
            
            $this->loadTemplate('home',$dados);
        }
        public function pegar_aulas(){
            if(!empty($_POST['modulo'])){
                $idModulo = $_POST['modulo'];
                $aulas = new Aulas();
                $array = $aulas->getAulas($idModulo);
                echo json_encode($array);
                exit;
                
            }
        }
        
    }
