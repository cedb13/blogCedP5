<?php

namespace App\Controllers\AppController;

use App\Controllers\Controller\Controller;
require '../controller.php';


class AppController extends Controller{

    protected $template = 'default';

    public function __construct()
    {
        $this->viewpath = '/App/Views/';
    }


}