<?php

class UserModel extends BaseModel{
    private $Id;
    private $Name;
    private $UserName;
    private $Email;
    private $Password;
    private $Role;
    private $Phone;
    private $Avata;



    public function GetAll()
    {
        return $this->all("user");
    }

    public function FindByUserName($UserName){

        $sql = "SELECT * FROM USER WHERE Username = '$UserName'";

        $result = $this->_Query($sql);
        return $result;
    }
    public function create($username,$pass,$emali,$name)
    {
        $sql = "INSERT INTO `user`( `Name`, `Username`, `Email`, `Password`,`Role`) VALUES ('$name','$username','$emali','$pass','user')";
        $result = $this->_Create($sql);
        
        return $result;
    }
    public function findById($id)
    {
        $sql = "SELECT * FROM USER WHERE Id = $id";
       
        $result = $this->_Query($sql);
      
        return $result;
    }
    public function FindByUserNameAndPass($name,$pass){
       
        $sql = "SELECT * FROM USER WHERE Username = '$name' AND Password = '$pass'";
        $result = $this->_Query($sql);
        return $result;
    }
    public function delete($id)
    {
        $sql =  "DELETE FROM USER WHERE id = $id";
        return $this->_delete($sql);
    }
}

?>