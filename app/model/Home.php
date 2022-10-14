<?php

namespace App\Model\Home;

use App\Lib\App\App;
use App\Model\Table\Table;

require 'table.php';

class Home extends Table{

    protected static $table = 'home';

    //pour récupérer mes contenus de la home
    public static function getInfo(){
        return App::getDb()->query('SELECT * FROM home');

    }


    public function getUrl(){
        return 'index.php?p=home';
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getExcerpt(){
        $html = '<p>' . substr($this->content_post, 0, 250) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }


}