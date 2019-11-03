<?php
     $novoJson = array(
         "nome"=>"Douglas Poma",
         "idade"=>"27",
         "site"=>"bemnegociado.com.br"
     );


/*
    $json = file_get_contents("https://www.correiodoestado.com.br/climatempo/json/");
    $json = json_decode($json);
    $obj = new StdClass();
    $obj->codigo = 111;
    $obj->cidade = "Papanduva";
    $obj->uf = "SC";
    $obj->baixa = 15;
    $obj->alta = 23;
    $obj->ico = 2;
    $obj->frase = "Alguma coisa";
    $obj->data = "..";
    $obj->dia_mes = "Janeiro";
    $obj->dia_semana = "Alguma";
    $obj->selecionada = 1;
    
    $json->previsao[] = $obj;
    /*
    echo "Cidades Retornadas: ".count($json->previsao)."<br>";
    foreach ($json->previsao as $item){
        echo "Cidade:".$item->cidade." - Mínima de {$item->baixa}º e máxima de {$item->alta}º - {$item->frase}<br>";
    }
     */



    echo json_encode($novoJson);
    //print_r($json);