<?php
class AdminController extends BaseController{
    
    public function __construct()
    {
        // $this->loadModel('PhongTroModel');
        // $this->PhongtroModel = new PhongTroModel();
        // $this->loadModel('KhuVucModel');
        // $this->KhuVucModel = new KhuVucModel();
        $user = $_SESSION["user"];
    
        if($user != null){
            if($user["Role"] != 'admin'){
                echo "<script type='text/javascript'>alert('Vui lòng đăng nhập tài khoản admin');</script>";
                header('Location: login');
            }
        }else{
            echo "<script type='text/javascript'>alert('Vui lòng đăng nhập tài khoản admin');</script>";;
            header('Location: login');
        }
    } 
    public function index($id)
    {
        
        if($_SERVER["QUERY_STRING"]!==""){
            $pramar = $_SERVER["QUERY_STRING"];
            if($pramar === 'user'){
                $this->user();
            }else if ($pramar === 'phongtro'){
                $this->phongtro();
            }else if ($pramar === 'khuvuc'){
                $this->khuvuc();
            }else{
                $this->information();
            }
        }else{
            $this->information();
        }  
    }

    public function user(){
        $this->loadModel('UserModel');

        
        $this->Model = new UserModel();
        $error = null;
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST["sumit"])){
           
                $TxtUserName = $_POST["TxtUserName"];
                $TxtPass = md5($_POST["TxtPass"]);
                $TxtEmail = $_POST["TxtEmail"];
                $TxtName = $_POST["TxtName"];
        
                $result = $this->Model->FindByUserName($TxtUserName);
             
                if($result->num_rows >0){
                    $error = "Tài khoản đã tồn tại"; 
                }else{
                    $result = $this->Model->create($TxtUserName,$TxtPass,$TxtEmail,$TxtName);
                    $error = "Thêm Thành Công";
                }
            }
    
        }
     
        $listuser = $this->Model->GetAll(); 
        return $this->views("User",  ['listuser' => $listuser,
        'errer' => $error]
    );
      
    
    }

    public function phongtro()
    {
        return $this->views("Phongtro");
    }
    public function khuvuc()
    {

        $this->loadModel('KhuVucModel');
        $this->Model = new KhuVucModel();
        $error = null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST["sumit"])){
           
                $txtTen = $_POST["TxtName"];
              
                $result = $this->Model->FindByUserName($txtTen);
             
                if($result->num_rows >0){
                    $error = "Khu vực đã tồn tại"; 
                }else{
                    $result = $this->Model->create($txtTen);
                    $error = "Thêm khu vực thành công"; 
                }
            }
    
        }

        $listKhuVuc = $this->Model->GetAll();
        return $this->views("khuvuc",["ListKhuVuc" => $listKhuVuc,
                                        'error' => $error
    ]);
        // return $this->views("khuvuc");
    }

    public function information()
    {
        return $this->views("info");
    }


   
}

?>