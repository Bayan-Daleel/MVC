<?php
namespace MVC\core;

class Helpers{

    public static function redirect($path){
       header('Location: DOMAIN_NAME'.$path); 
    }


    public static function assest($path){
        echo ROOT ."/public/".$path;
    }
}