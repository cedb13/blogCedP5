<?php

namespace App\Model\Post;

use App\Lib\App\App;
use App\Model\Table\Table;

require 'table.php';

class Post extends Table{

    protected static $table = 'posts';

    //pour récupérer mes derniers posts
    public static function getLast(){
        return App::getDb()->query('SELECT * FROM posts');

    }

    public function getUrl(){
        return 'index.php?p=post&id=' . $this->idpost;
    }

    public function getCaption(){
        return $this->caption;
    }

    public function getExcerpt(){
        $html = '<p>' . substr($this->content_post, 0, 250) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }


}