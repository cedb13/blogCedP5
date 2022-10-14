<?php

require '../app/Autoloader.php';
App\Autoloader\Autoloader::register();

$page='home';
$action='show';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}


$nameController="App\Controllers\\".ucfirst($page)."Controller";

echo $nameController;


echo "<br>";

$nameClass=$nameController::get_class();
echo $nameClass;

if(isset($nameController)){
    $nameClass=$nameController::get_class();
    echo $nameClass;
    //$action=$nameController::show();
    //echo $action;
}

