<?php

class UserController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->Model = new UserModel();
    } 
    public function index($id){
        $listuser = null;
        if(count($id) <2){
            $listuser = $this->Model->GetAll(); 
        }
        else{  
            $listuser = $this->Model->findById($id[1]);
        }
        return $this->view('Admin.User.index',[
            'listuser' => $listuser,
            'error' => null
        ]);
        
    }

    public function updateavata(){
        
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
            

           
        }

    }
    
    public function update($id)
    {
        if(isset($_POST["sumit"])){
           
            // $TxtUserName = $_POST["TxtUserName"];
            // $TxtPass = md5($_POST["TxtPass"]);
            // $TxtEmail = $_POST["TxtEmail"];
            // $TxtName = $_POST["TxtName"];
    
            // $result = $this->Model->FindByUserName($TxtUserName);
         
            // if($result->num_rows >0){
            //     echo "tai khoan da ton tai";
            // }else{
            //     $result = $this->Model->update($id,$TxtUserName,$TxtPass,$TxtEmail,$TxtName);
            //     echo $result;
            // }
            

           
        }
    }
    
    
}
