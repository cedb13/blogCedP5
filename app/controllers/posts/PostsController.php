<?php

namespace App\Controllers\Posts;

use App\Controllers\Controller\Controller;

use App\Model\Post\Post;

class PostsController extends Controller{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){

        echo 'prout';

        $posts = $this->Post::getLast();

        $this->render('posts', compact('posts'));

        /*var_dump($posts);*/
        /*print_r($posts);*/


    }


    public function show(){

        
    }


}