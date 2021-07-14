<?php 

require_once realpath("vendor/autoload.php");
use app\Application;

$app = new Application();

$app->router->get('/',function(){
    include('view/home.php');
});
$app->router->get('/about',function(){
    include('view/about.php');
});
$app->router->get('/info',function(){
    include('view/info.php');
});
$app->router->get('/mvc/',function(){
    include('view/home.php');
});
$app->router->get('/mvc/about',function(){
    include('view/about.php');
});
$app->router->get('/mvc/info',function(){
    include('view/info.php');
});
$app->run();