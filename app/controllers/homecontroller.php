<?php

namespace MVC\controllers;
use MVC\core\controller;
use PDO;
class homecontroller extends Controller{

    public function index(){ 
    // $db= $this->db()->rows("SELECT * FROM users");
    // echo "<pre>";
     //  var_dump($db);die;
        $this->view('home/index' ,['title' => 'Home']);

    }

     public function add(){   
        echo "hi";
     }


     public function login(){
        $this->view('home/login',['title' => 'Login']);
     }
}
?>