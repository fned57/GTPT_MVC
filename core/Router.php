<?php

class Router{

    private $listRoute = [];

    public function addRouter($methot, $url,$controller,$cation)
    {
        $this->listRoute[] = [$methot, $url,$controller,$cation];
    }
    public function get($ulr,$controller,$action)
    {
        $this->addRouter("GET",$ulr,$controller,$action);
    }
    public function post($ulr,$controller,$action)
    {
        
        $this->addRouter("POST",$ulr,$controller,$action);
    }
    public function put($ulr,$controller,$action)
    {
        
        $this->addRouter("PUT",$ulr,$controller,$action);
    }

    public function GetRuequestUlr(){
       
        $path = explode('/', $_SERVER["REQUEST_URI"]);
        return $path;
    }
    public function GetMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function mapUlr()
    {
        
        $ulr = $this->GetRuequestUlr();
        
        
    //    echo count($this->GetRuequestUlr());
       
        foreach($this->listRoute as $route){
            // $path = explode('/', $route[1]);
            // echo count($path);
            // break;
            if('/'.$ulr[1] === $route[1] ){
                if($route[0] === $this->GetMethod()){
                    require 'Controller/'.$route[2].'.php';
                    $controller = new $route[2]();
                    $action =  $route[3];
                    $controller->$action($ulr);
                    
                    
                    
                }else{
                    continue;
                }
            }else{
                continue;
            }
        }
    }
    
}

?>
