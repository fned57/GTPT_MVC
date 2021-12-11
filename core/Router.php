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
        if(count($path) > 2){
            array_splice($path, 0, 2);
        }
        
        if($path[0] == "admin"){
            $path[0] = $path[0].'/'.$path[1];
            array_splice($path, 1, 1);
        }
        
      
        return $path;
    }
    public function GetMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function mapUlr()
    {
        
        $ulr = $this->GetRuequestUlr();
        foreach($this->listRoute as $route){
            if('/'.$ulr[0] === $route[1] ){
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
