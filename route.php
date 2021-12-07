<?php
require './core/Router.php';


$Route = new Router();


// $Route->get("/home","HomeController","index");
// $Route->get("/","HomeController","index");
$Route->get("/admin/user","UserController","index");
// $Route->post("/user","UserController","create");
$Route->post("/admin/user","UserController","create" );

$Route->get("admin/khuvuc","KhuVucController","index" );
$Route->post("admin/khuvuc","KhuVucController","create" );

$Route->get("admin/phongtro","PhongTroController","index" );


$Route->get("/phongtro","PhongTroController","user" );

$Route->get("/login","LoginController","Getlogin" );
$Route->post("/login","LoginController","Postlogin" );


#home

$Route->get("/","HomeController","index");

$Route->mapUlr();

?>