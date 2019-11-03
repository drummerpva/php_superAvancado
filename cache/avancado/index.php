<?php

function isValido($cache){
    $ultimaModificacao = filemtime($cache);
    $c = time() - $ultimaModificacao;
    if($c > 10){
        return false;
    }else{
        return true;
    }
}
$p = 'pagina';
if(!empty($_GET['p']) && file_exists("paginas/$p.php")){
    $p = $_GET['p'];
}

if (file_exists("caches/".$p.".cache") && isValido("caches/".$p.".cache")) {
    require "caches/".$p.".cache";
} else {
//tudo o que tiver dentro do OB será guardado na memória
    ob_start();
    require 'paginas/'.$p.'.php';
    $html = ob_get_contents();
    ob_end_clean();
    file_put_contents("caches/".$p.".cache", $html);
    echo $html;
}

