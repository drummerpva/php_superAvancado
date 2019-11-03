<?php

class homeController extends controller {

    public function index() {
        $dados = array();

        $a = new Anuncios();
        $us = new Usuarios();
        $c = new Categorias();

        $filtros = array(
            "categoria" => "",
            "preco" => "",
            "estado" => ""
        );
        if (!empty($_GET['filtros'])) {
            $filtros = $_GET['filtros'];
        }

        $totalAnuncios = $a->getTotalAnuncios($filtros);
        $totalUsuarios = $us->getTotalUsuarios();
        $p = 1;
        if (!empty($_GET['p'])) {
            $p = addslashes($_GET['p']);
        }



        $anuncios = $a->getUltimosAnuncios($p, 2, $filtros);
        $totalPag = ceil($totalAnuncios / 2);
        $categorias = $c->getCategorias();
        $dados['totalAnuncios'] = $totalAnuncios;
        $dados['totalUsuarios'] = $totalUsuarios;
        $dados['categorias'] = $categorias;
        $dados['filtros'] = $filtros;
        $dados['anuncios'] = $anuncios;
        $dados['totalPag'] = $totalPag;
        $dados['p'] = $p;
        

        $this->loadTemplate('home', $dados);
    }

}
