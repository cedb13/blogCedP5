<?php
require '../App/Lib/Autoloader.php';
App\Lib\Autoloader\Autoloader::register();

$page='home';
$action='show';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//j'ai ajouté la classe au namespace d'ou le doublon
$nameController="App\Controllers\\".ucfirst($page)."Controller\\".ucfirst($page)."Controller";
echo $nameController;

$controller = new $nameController;


