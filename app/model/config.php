<?php

namespace App\Model\Config;

class Config {

    private $settings = [];
    private static $_instance;

    public static function getinstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    public function __construct(){

        $this->id = uniqid();
        $this->settings = require dirname(__DIR__) . '/config/config.php';
    }

    public function get($key){
        if (!isset($this->settings[$key])){
            return null;
        }
        return $this->settings[$key];
    }

}