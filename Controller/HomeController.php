<?php
class HomeController extends BaseController{
    private $PhongtroModel;
    private $KhuVucModel;
    
    public function __construct()
    {
        $this->loadModel('PhongTroModel');
        $this->PhongtroModel = new PhongTroModel();
        $this->loadModel('KhuVucModel');
        $this->KhuVucModel = new KhuVucModel();
        
    } 
    public function index($id)
    {   
        $listPhongtro = null;
        
        if($_SERVER["QUERY_STRING"]!==""){
            $pramar = $_SERVER["QUERY_STRING"];
            $pramar = explode("&&" ,  $pramar);
            // $khuvuc = strpos( $pramar, "khuvuc");
            $khuvuc = null;
            $giaphong = null;
            $tienich = null;
            foreach ($pramar as $key => $value){
               
                $kv = strpos( $value, "khuvuc");
                $gp = strpos( $value, "khoanggia");
                $ti = strpos( $value, "tienich");
                if($kv === 0){
                   $count = strlen($value);
                   $khuvuc = substr($value,7,$count);
             
                }
                if($gp === 0){
                    $count = strlen($value);
                    $giaphong = substr($value,10,$count);
                  
                   
                }
                if($ti === 0){
                    $count = strlen($value);
                   $tienich = substr($value,8,$count);
                
                   
                }

            }
            
            if($khuvuc !=null && $giaphong != null && $tienich !=null){
                echo "ca 3";
            }else if($khuvuc !=null && $giaphong == null && $tienich ==null){
                $listPhongtro = $this->PhongtroModel->GetByKhuVuc($khuvuc);
     
            }
            else if($khuvuc !=null && $giaphong != null && $tienich ==null){
                $listPhongtro = $this->PhongtroModel->GetByKhuVucAndGiaPhong($khuvuc,$giaphong);
            }
            else if($khuvuc !=null && $giaphong = null && $tienich !=null){
                $listPhongtro = $this->PhongtroModel->GetByTienIchAndGiaPhong($tienich,$giaphong);
            }
            else if($khuvuc ==null && $giaphong != null && $tienich ==null){
                $listPhongtro = $this->PhongtroModel->GetByGiaPhong($giaphong);
            }
            else if($khuvuc ==null && $giaphong != null && $tienich !=null){
                $listPhongtro = $this->PhongtroModel->GetByGiaPhongAndTienIch($giaphong,$tienich);
            }
            else if($khuvuc==null && $giaphong == null && $tienich !=null){
                $listPhongtro = $this->PhongtroModel->GetByTienIch($tienich);
   
          }
          
        }else{
            
            $listPhongtro = $this->PhongtroModel->GetAll();
        }
        $khuvuc = $this->KhuVucModel->GetAll();
        
        // return $this->view("User.phongtro",[
        //     'Listphongtro' => $listPhongtro,
        //     'ListKhuVuc'   => $khuvuc
        // ]);
        $this->view("bootstrap.album-rtl.index",[
                'Listphongtro' => $listPhongtro,
                'ListKhuVuc'   => $khuvuc
            ]);
        
    }


    public function info($id)
    {
        if(isset($id[1])){
            $Phongtro = $this->PhongtroModel->findById($id[1]);
            return $this->view("User.info",['phongtro' => $Phongtro]);
        }else{
            echo "asdada";
        }
    }
   
}

?>