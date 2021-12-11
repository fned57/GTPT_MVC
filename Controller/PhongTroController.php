<?php

class PhongTroController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('PhongTroModel');
        $this->Model = new PhongTroModel();
    } 
    public function index($id){
        
        $listPhongtro = null;
      
        if(count($id) <3){
            $listPhongtro = $this->Model->GetAll(); 
        }
        else{  
            $listPhongtro = $this->Model->findById($id[2]);
        }
        return $this->view('Admin.User.index',[
            'listuser' => $listPhongtro,
            'error' => null
        ]);
        
    }
    public function create(){
    
        if(isset($_POST["sumit"])){
           
            $TxtUserName = $_POST["TxtUserName"];
            $TxtPass = md5($_POST["TxtPass"]);
            $TxtEmail = $_POST["TxtEmail"];
            $TxtName = $_POST["TxtName"];
    
            $result = $this->Model->FindByUserName($TxtUserName);
         
            if($result->num_rows >0){
                echo "tai khoan da ton tai";
            }else{
                $result = $this->Model->create($TxtUserName,$TxtPass,$TxtEmail,$TxtName);
                echo $result;
            }
            $this->back(["error" => "loi"]);

           
        }

    }
    
    public function update($id)
    {
        if(isset($_POST["sumit"])){
           
 
        }
    }

    public function user(){
        $listPhongtro = null;
        return $this->view('User.phongtro',[
            'listuser' => $listPhongtro,
            'error' => null
        ]);
    }
    
    
}
