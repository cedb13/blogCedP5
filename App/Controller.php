<?php
namespace App\Controller;

use App\Lib\App\App;

class Controller {

    protected $viewPath;
    protected $template = 'default';
    public $variables = array();

    public function __construct(){

        $this->viewpath = '../app/views/templates';
    }

    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable('home');
    }

    public function setVar($contentPage){
        $this->variables = array_merge($this->variables,$contentPage);
    }

    public function getVar(){
        return $this->variables ;
    }

    public function render($view){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) .'.php') ;
        $content = ob_get_clean();
       require($this->viewpath . 'templates/' . $this->template . '.php');
    }
}