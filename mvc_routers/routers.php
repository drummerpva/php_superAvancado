<?php
global $routes;
$routes = array();
//$routes['/cadastro/{nome}/{sobrenome}'] = '/suarios/cadastrar/:nome/:sobrenome'; 
$routes['/galeria/{id}/{titulo}'] = '/galeria/abrir/:id/:titulo'; 
$routes['/news/{titulo}'] = '/noticia/abrir/:titulo'; 
$routes['/home/index'] = '/home/index'; 
$routes['/n/{titulo}'] = '/noticia/abrirtitulo/:titulo'; 