<?php
//Aula Cache básico
class Cache{
    private $cache;
    public function setVar($nome, $valor){
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
    }
    public function getVar($nome){
        $this->readCache();
        return $this->cache->$nome;
    }
    
    private function readCache(){
        $this->cache = new stdClass();
        if(file_exists("cache.cache")){
            $this->cache = json_decode(file_get_contents('cache.cache'));
        }
    }
    private function saveCache(){
        file_put_contents("cache.cache",json_encode($this->cache));
    }
}
$cache = new Cache();
//$cache->setVar("idade",27);
echo "Meu nome é:".$cache->getVar("nome")." e eu tenho ".$cache->getVar("idade")." anos";


