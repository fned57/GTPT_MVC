<?php

class HomeModel extends BaseModel{


    public function GetAll()
    {
        $this->all("user");
    }
}