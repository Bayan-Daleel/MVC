<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\session;

class UserController extends Controller{

    public function __construct(){
      Session::Start();
     $user_data= Session::Get('user');
      if(empty($user_data)){
        echo "class not acsess";
      }  

    }
  
    public function index(){
    echo "Welcome";
}

}