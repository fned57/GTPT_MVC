<?php

require './core/Router.php';


$Route = new Router();

$Route->get("/login","LoginController","Getlogin" );
$Route->get("/logout","LoginController","logout" );
$Route->get("/admin","AdminController","index");
$Route->get("/","HomeController","index");
$Route->get("/home","HomeController","index");
$Route->mapUlr();

?>