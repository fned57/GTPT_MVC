<?php
class AdminController extends BaseController{
    
    public function __construct()
    {
       
        $user = $_SESSION["user"];
  
        if($user != null){
            if($user["Role"] != 'admin'){
                
                header('Location: login');
            }
        }else{
            header('Location: login');
        }
    } 
    public function index($id)
    {

        if($_SERVER["QUERY_STRING"]!==""){
            $pramar = $_SERVER["QUERY_STRING"];
            $pramar = explode("&&" ,  $pramar);
            if($pramar[0] === 'user'){
                if(isset($pramar[1])){
                    
                    if(isset($pramar[2])){
                        

                        $this->user($pramar[1],$pramar[2]);
                    }else
                        $this->user($pramar[1]);
                }else
                $this->user();
            }else if ($pramar[0] === 'phongtro'){
                $this->phongtro();
            }else if ($pramar[0] === 'khuvuc'){
                if(isset($pramar[1])){
                    
                    if(isset($pramar[2])){
                        

                        $this->khuvuc($pramar[1],$pramar[2]);
                    }else
                        $this->khuvuc($pramar[1]);
                }else
                $this->khuvuc();
            }else{
                $this->information();
            }
        }else{
            $this->information();
        }  
    }

    public function user($id = null, $event = null){
    
        $this->loadModel('UserModel');
       
        
        $this->Model = new UserModel();
        $error = null;
        $mess = null;
      
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST["sumit"])){
           
                $TxtUserName = $_POST["TxtUserName"];
                $TxtPass = md5($_POST["TxtPass"]);
                $TxtEmail = $_POST["TxtEmail"];
                $TxtName = $_POST["TxtName"];
        
                $result = $this->Model->FindByUserName($TxtUserName);
             
                if($result->num_rows >0){
                    $error = "T??i kho???n ???? t???n t???i"; 
                }else{
                    $result = $this->Model->create($TxtUserName,$TxtPass,$TxtEmail,$TxtName);
                    $error = "Th??m Th??nh C??ng";
                }
            }
    
        }
        if($id != null){
            $id = substr($id,3);
            if($event != null){
                $event = substr($event,6);
                echo $event;
                
                if($event === 'xoa'){
                    $result = $this->Model->delete($id);
                   
                    if($result){
                        $mess = "X??a th??nh c??ng";
                        $listuser = $this->Model->GetAll(); 
                    }else{
                        $mess = "X??a th???t b???i";
                        $listuser = $this->Model->GetAll(); 
                    }
                }
            }else{
                $listuser = $this->Model->findById($id);   
            }
        }else
            $listuser = $this->Model->GetAll(); 
        return $this->views("User",  ['listuser' => $listuser,
        'errer' => $error,
        'mess' => $mess
        ]
    );
      
    
    }

    public function phongtro()
    {
        return $this->views("Phongtro");
    }
    public function khuvuc($id = null, $event = null)
    {

        $this->loadModel('KhuVucModel');
        $this->Model = new KhuVucModel();
        $error = null;
        $mess = null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST["sumit"])){
           
                $txtTen = $_POST["TxtName"];
              
                $result = $this->Model->FindByUserName($txtTen);
             
                if($result->num_rows >0){
                    $error = "Khu v???c ???? t???n t???i"; 
                }else{
                    $result = $this->Model->create($txtTen);
                    $error = "Th??m khu v???c th??nh c??ng"; 
                }
            }
    
        }

        if($id != null){
            $id = substr($id,3);
            if($event != null){
                $event = substr($event,6);
               
                
                if($event === 'xoa'){
                    $result = $this->Model->delete($id);
                    echo $result;
                    if($result){
                        $mess = "X??a th??nh c??ng";
                        $listKhuVuc = $this->Model->GetAll(); 
                    }else{
                        $mess = "X??a th???t b???i";
                        $listKhuVuc = $this->Model->GetAll(); 
                    }
                }
            }else{
                $listKhuVuc = $this->Model->findById($id);   
            }
        }else
            $listKhuVuc = $this->Model->GetAll(); 

        return $this->views("khuvuc",["ListKhuVuc" => $listKhuVuc,
                                        'error' => $error,
                                        'mess' => $mess
                            ]);
    }

    public function information()
    {
        return $this->views("info");
    }


   
}

?>