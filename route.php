<?php

require './core/Router.php';


$Route = new Router();


// $Route->get("/home","HomeController","index");
// $Route->get("/","HomeController","index");
// $Route->get("/admin/user","UserController","index");
// // $Route->post("/user","UserController","create");
// $Route->post("/admin/user","UserController","create" );

// $Route->get("/admin/khuvuc","KhuVucController","index" );
// $Route->post("/admin/khuvuc","KhuVucController","create" );

// $Route->get("/admin/phongtro","PhongTroController","index" );




// $Route->get("/phongtro","PhongTroController","user" );

$Route->get("/login","LoginController","Getlogin" );
$Route->get("/logout","LoginController","logout" );
// $Route->post("/login","LoginController","Postlogin" );

#user


#home

$Route->get("/admin","AdminController","index");
// $Route->post("/admin","AdminController","index");

$Route->get("/","HomeController","index");
// $Route->get("/info","HomeController","info");

$Route->mapUlr();

?>