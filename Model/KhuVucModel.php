<?php

class KhuVucModel extends BaseModel{
    private $Id;
    private $Name;
   



    public function GetAll()
    {
        return $this->all("districts");
    }

    public function FindByName($UserName){

        $sql = "SELECT * FROM districts WHERE Name = '$UserName'";

        $result = $this->_Query($sql);
        return $result;
    }
    public function findById($id){

        $sql = "SELECT * FROM districts WHERE Id = '$id'";

        $result = $this->_Query($sql);
        return $result;
    }
    public function create($name)
    {
        $sql = "INSERT INTO districts(Name) VALUES ('$name')";
        $result = $this->_Create($sql);
        return $result;
    }
    public function delete($id)
    {
        $sql =  "DELETE FROM districts WHERE id = $id";
        return $this->_delete($sql);
    }
    // public function create()
    // {
    //     $sql =  "CREATE TABLE IF NOT EXISTS User(id int, Naame varchar(255), 
    //     UserName varchar(255), Email varchar(255), Paassword char(100), Rolee int, Phone char(10), avatar varchar(255))";
    //     return $this->createdb($sql);
    // }
}

?>