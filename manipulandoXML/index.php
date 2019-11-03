<?php
function arrayToXml($data, &$xmlData){
    foreach ($data as $key => $value){
        if(is_array($value)){
            if(is_numeric($key)){
                $key = 'item'.$key;
            }
            $subNode = $xmlData->addChild($key);
            arrayToXml($value, $subNode);
        }else{
            if(is_numeric($key)){
                $key = 'item'.$key;
            }
            $xmlData->addChild($key, htmlspecialchars($value));
        }
    }
}
$data = array(
    "nome" => "Douglas",
    "sobrenome" => "Poma",
    "idade" => 27,
    "caracteristicas" => array(
        "amigo",
        "fiel",
        "companheiro",
        "inteligente"
        )
);

$xmlData = new SimpleXMLElement("<data/>");
arrayToXml($data, $xmlData);
$result = $xmlData->asXML();
echo $result;







/*
$xml = simplexml_load_file("ondas.xml");
echo "Cidade: {$xml->nome} <br><br> Manhã: {$xml->manha->vento}<br> Tarde: {$xml->tarde->vento}";
//print_r($xml);
 * 
 */