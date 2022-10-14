<?php
namespace App\Lib\App;

use App\Lib\Database\Database;

class App{

    const DB_NAME = 'blog_pro_p5';
    const DB_USER = 'opcteacher';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDb(){
        if( self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;

    }
}