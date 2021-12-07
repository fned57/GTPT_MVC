<?php
class HomeController extends BaseController{
    private $Model;
    public function __construct()
    {
        $this->loadModel('PhongTroModel');
        $this->Model = new PhongTroModel();
    } 
    public function index()
    {
        // echo "ad";
        // $listUser = $this->Model->GetAll();
        return $this->view("User.phongtro");
        // require "View/Admin/User/index.php";
    }
}

?>