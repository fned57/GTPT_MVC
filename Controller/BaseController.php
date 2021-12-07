<?php

class BaseController{
    const VIEW_FOLDER_NAME = 'View';
    const MODEL_FORDEL_NAME = 'Model';
    public function view($path,$data = [])
    {
        foreach($data as $key => $value){
            $$key = $value;
        }
        $path = self::VIEW_FOLDER_NAME .'/' .str_replace('.','/',$path).'.php';
         
        return require $path;
    }
    protected function loadModel($path)
    {
        $path = self::MODEL_FORDEL_NAME .'/' .$path.'.php';
        return require $path;
    }

    protected function back($data = [])
    {
        foreach($data as $key => $value){
            $$key = $value;
        }
        header('Location: '.$_SERVER["REQUEST_URI"].'');
        
    }
}
