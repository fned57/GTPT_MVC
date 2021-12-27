<?php

class BaseModel extends Database{
    protected $conn;
    public function __construct()
    {
       
        $this->conn = $this->conncet();
        if($this->conn == null){
            echo "Connect database fail!!";
            die;
        }

    }

    public function all($table)
    {
        
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
         
        return $result;
    }
    public function _Query($sql){
        $result = $this->conn->query($sql);
        return $result;
    }
    public function _Create($sql){

        if ($this->conn->query($sql) === TRUE) {
            return "Thêm Thành công";
          } else {
            return "Thêm Thất Bại";
          }
    }
    public function _delete($sql){

        if ($this->conn->query($sql) === TRUE) {
            return true;
          } else {
            return false;
          }
    }

}