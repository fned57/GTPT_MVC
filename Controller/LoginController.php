<?php

class LoginController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->Model = new UserModel();
    } 
    public function Getlogin($error =[]){
        echo '
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            </head>
            <body>
                <h1>Dang Nhap</h1>
               
                <form action="/login" method="post" class="row g-3">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We ll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
            </body>
        </html>
        
        ';
    }
    public function Postlogin(){
        
        if(isset($_POST["submit"])){
           
            $TxtUserName = $_POST["username"];
            $TxtPass = md5($_POST["password"]);
           
           
            $result = $this->Model->FindByUserNameAndPass($TxtUserName,$TxtPass);
            if($result->num_rows >0){
                $_SESSION["user"] = $result;
            }else{
                $this->Getlogin(['error' => "tai khoan sai"]);
            }
       
        }
    }
    public function logout(){
        $_SESSION["user"] = null;
    }
    
}
