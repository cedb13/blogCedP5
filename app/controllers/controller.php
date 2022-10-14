<?php
namespace App\Controllers;

class Controller {

    protected $viewPath;
    protected $template;
    
    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) .'.php') ;
        $content = ob_get_clean();
        require($this->viewpath . 'templates/' . $this->template . '.php');
    }
}