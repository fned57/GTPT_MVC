<?php
    session_start();

    header('Access-Control-Allow-Origin: *');
    require "core/database.php";
    require "Controller/BaseController.php";
    require "Model/BaseModel.php";
    require "./route.php";

?>