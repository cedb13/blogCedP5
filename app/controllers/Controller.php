<?php
namespace App\Controllers\Controller;

use App\Lib\App\App;

class Controller {

    protected $viewPath;
    protected $template = 'default';

    public function __construct(){

        /*$this->viewpath = 'default';*/
        $this->viewpath = '/app/views/';
    }

    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable('post');
    }

    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) .'.php') ;
        $content = ob_get_clean();
        require($this->viewpath . 'templates/' . $this->template . '.php');
    }
}