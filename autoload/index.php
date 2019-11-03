<?php
/*
 * MEtodo antigo
 * require "classes/cavalo.php";
 * require "classes/pessoa.php";
 * $cavalo = new Cavalo();
 * $pessoa = new Pessoa();
 * $cavalo->falar();
 * $pessoa->andar();
 * 
 */
spl_autoload_register(function($class){
    require 'classes/'.$class.".php";
    
});

$cavalo = new Cavalo();
$cavalo->falar();