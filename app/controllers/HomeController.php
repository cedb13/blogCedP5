<?php

namespace App\Controllers\Home;

require_once('app/model/form.php');

use App\Controllers\Controller;
use App\Model\Home\Home;


class HomeController extends Controller{

    public function index(){

        echo 'prout';

        $home = $this->Home::getInfo();

        $this->render('home', compact('home'));
    }

    public function show(){
        ob_start();
        include ('/app/view/template/home.php');
        $contentsHome = ob_get_contents();
        ob_end_clean();
    }

}