<?php
   namespace MVC\core;

   use Dcblogdev\PdoWrapper\Database;
   Class Controller {

    public function view($path,$param){
      extract($param); //convert  evry key and value to varaible and value
     require_once(VIEWS.$path.".php");
    }

    public function db(){
    $options = [
      //required
      'username' => 'root',
      'database' => 'programmer100',
      //optional
      'password' => '',
      'type' => 'mysql',
      'charset' => 'utf8',
      'host' => 'dev',
      'port' => '3306'
  ];
  return $db = new Database($options);

}



   }

?>