<?php
class Database{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'sa';
    const DB_NAME = 'gtpt';

    public function conncet()
    {
        $conn = new mysqli(self::HOST, self::USERNAME, self::PASSWORD,self::DB_NAME);

        // Check connection
        if ($conn->connect_error) {
           
            return FALSE;
        }
       
        return $conn;
    }

}

?>