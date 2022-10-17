<?php

namespace App\Controllers\HomeController;

use App\Controller\Controller;

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Home');
    }


    public function index(){
        $contentPage['cv']= array('nom'=>'Bonche', 'prenom'=>'Cedric');
        $this->setVar($contentPage);
        $this->getVar($contentPage);
        $this->render('home');
    }

   /* public function show(){
        //$home = $this->Home::getPicture;

        $homeContents= 'hello world';
        echo $homeContents;*/

       /*$homeContents = $this->render('home', $test);*/
   /* }*/

}