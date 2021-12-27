<?php

class PhongTroModel extends BaseModel{
 

    public function GetAll()
    {
        return $this->all("motel");
    }

    public function GetByKhuVuc($id)
    {
        $sql = "SELECT * FROM motel WHERE district_id = $id";
       
        return $this->_Query($sql);
    }
    public function GetByKhuVucAndGiaPhong($khuvuc,$giaphong)
    {
        $sql = "SELECT * FROM motel WHERE district_id = $$khuvuc";
       
        return $this->_Query($sql);
    }

    public function GetByTienIchAndGiaPhong($tienich,$giaphong)
    {
        // $sql = "SELECT * FROM motel WHERE district_id = $$khuvuc";
       
        // return $this->_Query($sql);
        return $this->all("motel");
    }
    public function GetByGiaPhong($giaphong)
    {
        // $sql = "SELECT * FROM motel WHERE district_id = $$khuvuc";
       
        // return $this->_Query($sql);
        return $this->all("motel");
    }
    public function GetByGiaPhongAndTienIch($giaphong,$tienich)
    {
        // $sql = "SELECT * FROM motel WHERE district_id = $$khuvuc";
       
        // return $this->_Query($sql);
        return $this->all("motel");
    }
    public function GetByTienIch($tienich)
    {
        // $sql = "SELECT * FROM motel WHERE district_id = $$khuvuc";
       
        // return $this->_Query($sql);
        return $this->all("motel");
    }

    public function FindByUserName($UserName){

        $sql = "SELECT * FROM USER WHERE Username = '$UserName'";

        $result = $this->_Query($sql);
        return $result;
    }
    public function create($username,$pass,$emali,$name)
    {
        $sql = "INSERT INTO USER(Username,Password,Email,Name) VALUES ('$username','$pass','$emali','$name')";
        $result = $this->_Create($sql);
        return $result;
    }
    public function findById($id)
    {
        $sql = "SELECT * FROM motel WHERE Id = '$id'";

        $result = $this->_Query($sql);
        return $result;
    }
    // public function create()
    // {
    //     $sql =  "CREATE TABLE IF NOT EXISTS User(id int, Naame varchar(255), 
    //     UserName varchar(255), Email varchar(255), Paassword char(100), Rolee int, Phone char(10), avatar varchar(255))";
    //     return $this->createdb($sql);
    // }
}

?>