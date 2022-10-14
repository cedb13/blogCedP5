<?php

namespace App\Model\Comment;

use App\Model\Table\Table;
/*use App\Lib\App\App;*/
/*require 'table.php';*/

class Comment extends Table{

    //pour récupérer les commentaires

    protected static $table = 'comments';

    public static function lastByPost($idpost){
        return self::query("
            SELECT idcomment, comments.title, content_comment, last_name, first_name, date_publication, posts.idpost as post 
            FROM comments 
            LEFT JOIN nave_user 
                ON idNaveUser = nave_user_idNaveUser
            LEFT JOIN posts
                ON idpost = post_idpost
            WHERE idpost = ?
            ", [$idpost]);

    }


    /*public static function getComments(){
        return App::getDb()->query("
        SELECT idcomment, comments.title, content_comment, last_name, first_name, date_publication, posts.idpost as post 
        FROM comments 
        LEFT JOIN nave_user 
            ON idNaveUser = nave_user_idNaveUser
        INNER JOIN posts
            ON idpost = post_idpost
        ", __CLASS__);

    }*/

    /*public function __get($key) //fonction magic pour trouver un élément, dans notre cas par exple cela sert à récupérer 'title', 'getTitle'...
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }*/

  /*  public function getUrl(){
        return 'index.php?p=post&id=' . $this->idpost;
    }

    public function getCaption(){
        return $this->caption;
    }

    public function getExcerpt(){
        $html = '<p>' . substr($this->content_post, 0, 250) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }*/


}