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
    public function createdb($sql)
    {
        
      
        if ($this->conn->query($sql) === TRUE) {
            return TRUE;
          } else {
            return FALSE;
          }
    }

    public function dropdb($table)
    {
        $sql = "DROP TABLE $table";
    }


    public function all($table)
    {
        
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        // if ($result->num_rows > 0) {
        //     // output data of each row
        //     while($row = $result->fetch_assoc()) {
        //       echo "co du lieu";
        //     }
        //   } else {
        //     echo "0 results";
        //   }  
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

}