<?php
class HomeController extends BaseController{
    private $Model;
    
    public function __construct()
    {
        $this->loadModel('PhongTroModel');
        $this->Model = new PhongTroModel();
        
    } 
    public function index($id)
    {
      
        
        // $listPhongtro = $this->Model->GetAll();

      
        // return $this->view("User.phongtro",['Listphongtro' => $listPhongtro]);
        // require "View/Admin/User/index.php";

        $this->sendResponse(100,'{“items”:'.json_encode("asdsa").'}');
    }


    public function info($id)
    {
        if(isset($id[1])){
            $Phongtro = $this->Model->findById($id[1]);
            return $this->view("User.info",['phongtro' => $Phongtro]);
        }else{
            echo "asdada";
        }
    }
    public function boloc($id)
    { 
        // header("Content-Type: application/json; charset=UTF-8");
        // $this->loadModel('KhuVucModel');
        // $KhuVucModel = new KhuVucModel();
        // $listkhuvuc = $KhuVucModel->GetAll();
        // if($listkhuvuc->num_rows >0){
        //     while($row = $listkhuvuc->fetch_assoc()){
        //         echo ($row["Name"]);
        //     }
        // }

        $this->sendResponse(100,'{“items”:'.json_encode("asdsa").'}');

    }
}

?>