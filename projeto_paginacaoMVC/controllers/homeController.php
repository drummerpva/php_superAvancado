<?php
    class homeController extends controller{
        public function index(){
            $dados = array();
            $itens = new Itens();
            $offset = 0;
            $limit = 10;
            
            
            $total = $itens->getTotal();
            $dados['paginaAtual'] = 1;
            if(!empty($_GET['p'])){
                $dados['paginaAtual'] = intval($_GET['p']);
            }
            $offset = ($dados['paginaAtual']*$limit) - $limit;
            $dados['paginas'] = ceil($total/$limit);
            $dados['lista'] = $itens->getList($offset,$limit);
            
            
            $this->loadTemplate('home',$dados);
        }

        
    }
