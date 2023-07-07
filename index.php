<?php
require 'connection.php';
require "router.php";
// $conn = [];

$conn['db'] = (new Database())->db;


session_start();


$router = new routers();


$router->get('/login','controller/login/login.php');
$router->get('/login-logic','controller/login/login.logic.php');
$router->get("/users","controller/users/users.home.php");
$router->get("/admin","controller/admin/admin.home.php");
$router->get("/search","controller/search.php");


$router->get("/playlist","controller/playlist.php");
$router->get("/createlist","controller/allplaylist.php");
$router->get("/list","controller/list.php");
$router->get("/addart","controller/addart.php");
$router->get("/inserting","controller/inserting.php");
$router->get("/addsong","controller/addsong.php");
$router->get("/insertsong","controller/insertsong.php");
$router->get("/addpremium","controller/addpremium.php");
$router->get("/request","controller/request.php");
$router->get("/Accept","controller/Accept.php");
$router->get("/create","controller/create.php");
$router->get("/yourlist","controller/yourlist.php");
$router->get("/addingsong","controller/addingsong.php");
$router->get("/share","controller/share.php");
$router->get("/logout","controller/login/logout.php");






require $router->checking();
