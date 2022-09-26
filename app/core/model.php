<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\src\Database;

class Model{

  static function db(){
        $options = [
          //required
          'username' => 'root',
          'database' => 'programmer100',
          //optional
          'password' => '',
          'type' => 'mysql',
          'charset' => 'utf8',
          'host' => 'localhost',
          'port' => '3306'
      ];
      return $db = new Database($options);
    
    }

}