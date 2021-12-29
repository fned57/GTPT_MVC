<?php

class LoginController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->Model = new UserModel();
    } 
    public function Getlogin(){
        $error = null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST["submit"])){
           
                $TxtUserName = $_POST["username"];
                $TxtPass = md5($_POST["password"]);
               
               
                $result = $this->Model->FindByUserNameAndPass($TxtUserName,$TxtPass);
                if($result->num_rows >0){
                    $user = null;
                    while($row = $result->fetch_assoc()) {
                        
                        $user = 
                            [   'id'   => $row["id"],
                                'Role' => $row["Role"],
                                'Name' =>  $row["Name"]
                            ];
                            break;
                      }
                    $_SESSION["user"] = $user;    
                    header('Location: home');
                    
                    
                }else{
                    $error = "Đăng nhâp không thành công";
                }
           
            }
        }
        $this->view("login", [ 'error' => $error]);
    }
    public function logout(){
        $_SESSION["user"] = null;
        header('Location: home');
    }
    
}
