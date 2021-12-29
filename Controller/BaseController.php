<?php

class BaseController{
    const VIEW_FOLDER_NAME = 'View';
    // const VIEW_FOLDER_NAME = 'View';
    const MODEL_FORDEL_NAME = 'Model';
    public function view($path,$data = [])
    {
        foreach($data as $key => $value){
            $$key = $value;
        }
        $path = self::VIEW_FOLDER_NAME .'/' .str_replace('.','/',$path).'.php';
        return require $path;
    }
   
    public function views($path,$data = [])
    {
        foreach($data as $key => $value){
            $$key = $value;
        }
        // $path = self::VIEW_FOLDER_NAME .'/' .str_replace('.','/',$path).'.php';
         
        return require "View/Admin/index.php";
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
    protected function sendResponse($status = 200, $body = null, $content_type = "text/html") {


        $status_header = 'HTTP/1.1 ' . $status . ''. $this->getStatusCodeMeeage($status);
        header($status_header);
        header('Content-type: ' . $content_type);
        header('Access-Control-Allow-Origin: *');
        echo $body;
        }
    
        function getStatusCodeMeeage($status){
            $codes = Array(
            100 => 'Continue',
            101 => 'Switching Protocols',
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            305 => 'Use Proxy',
            306 => '(Unused)',
            307 => 'Temporary Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Request Entity Too Large',
            414 => 'Request-URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Requested Range Not Satisfiable',
            417 => 'Expectation Failed',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported'
            );
            
            return (isset($codes[$status])) ? $codes[$status] : "";
            }
}
