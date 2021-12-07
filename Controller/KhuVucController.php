<?php
class KhuVucController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('KhuVucModel');
        $this->Model = new KhuVucModel();
    } 
    public function index()
    {
        $listKhuVuc = $this->Model->GetAll();
        return $this->view("Admin.KhuVuc.index",["ListKhuVuc" => $listKhuVuc]);
        // require "View/Admin/KhuVuc/index.php";
    }

    public function create(){
    
        
        if(isset($_POST["sumit"])){
           
            $txtTen = $_POST["TxtName"];
            echo $txtTen;
          
            $result = $this->Model->FindByUserName($txtTen);
         
            if($result->num_rows >0){
                echo "khu vuc da ton tai";
            }else{
                $result = $this->Model->create($txtTen);
                echo $result;
            }
            $this->back(["error" => "loi"]);

           
        }

    }
}

?>