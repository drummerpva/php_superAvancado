<?php

class Core {

    public function run() {
        $url = '/';
        if (!empty($_GET['url'])) {
            $url .= $_GET['url'];
        }
        $url = $this->checkRoutes($url);

        //die($url);
        $params = array();
        if (!empty($url) && $url != "/") {
            $url = explode("/", $url);
            array_shift($url);
            $currentController = $url[0] . "Controller";
            array_shift($url);
            if (isset($url) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = "index";
            }

            if (count($url) > 0) {
                $params = $url;
            }
            //print_r($url);
            //echo "<hr>";
        } else {
            $currentController = "homeController";
            $currentAction = "index";
        }

        if (!file_exists("controllers/" . $currentController . ".php") || !method_exists($currentController, $currentAction)) {
            $currentController = "notFoundController";
            $currentAction = "index";
        }
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);


        /*
          echo "Controller:".$currentController."<br>";
          echo "Action:".$currentAction."<br>";
          echo "Params:".$params."<br>";
         */
    }

    private function checkRoutes($url) {
        global $routes;
        foreach ($routes as $pt => $newUrl){
            //identifica os argumentos e substitui por expressoes regulares
            $pattern = preg_replace("(\{[a-z0-9]{1,}\})", "([a-z0-9-]{1,})", $pt);
            //faz o match da URL
            if(preg_match("#^(".$pattern.")*$#i", $url, $matches) === 1){
                array_shift($matches);
                array_shift($matches);
                
                //pega todos os argumentos para associar
                $itens = array();
                if(preg_match_all("(\{[a-z0-9]{1,}\})", $pt,$m)){
                    $itens = preg_replace("(\{|\})", "", $m[0]);
                }
                
                //faz a associação
                $arg = array();
                foreach ($matches as $key => $match){
                    $arg[$itens[$key]] = $match;
                }
                foreach ($arg as $argKey => $argValue){
                    $newUrl = str_replace(":".$argKey, $argValue, $newUrl);
                }
                $url = $newUrl;
                break;
            }
        }    
        return $url;
        //print_r($routes);
        //exit;
    }

}
