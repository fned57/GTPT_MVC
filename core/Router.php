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
    //   print_r($_SERVER);
        $path = explode('/', $_SERVER["REQUEST_URI"]);
        // print_r($path);
        if(count($path) === 3){
            if(isset($_SERVER["QUERY_STRING"])){
                if(strpos($path[2],"?") ===0){
                    $path[2] = '';
                }
               
            }
        }
        if(count($path) === 3){
            if(isset($_SERVER["QUERY_STRING"])){
                if(strpos($path[2],"admin") ===0){
                    $path[2] = 'admin';
                    // echo "ad";
                }
               
            }
        }
   
        if(count($path) > 2){
            array_splice($path, 0, 2);
        }
        
        // if($path[0] == "admin"){
        //     $path[0] = $path[0].'/'.$path[1];
        //     array_splice($path, 1, 1);
        // }
    
        // print_r($path);
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
            // echo '/'.$ulr[0] . '<br>';
            // echo $route[1];
            // die;
            if('/'.$ulr[0] === $route[1] ){
                // echo "ad";
                // if($route[0] === $this->GetMethod()){
                    
                    require 'Controller/'.$route[2].'.php';
                    $controller = new $route[2]();
                    $action =  $route[3];
                    $controller->$action($ulr);
                
                // }else{
                //     continue;
                // }
            }else{
                continue;
            }
        }
    }
    
}

?>
