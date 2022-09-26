<?php

namespace MVC\controllers;
use MVC\core\controller;
use PDO;
use MVC\models\user;
use GUMP;
use Rakit\Validation\Validator;
use MVC\core\Session;

class homecontroller extends Controller{

    public function __construct() 
    {
        Session::start();
    }

    public function index(){ 
    // $db= $this->db()->rows("SELECT * FROM users");
    // echo "<pre>";
     //  var_dump($db);die;

        $user=new user();
        $data =$user->GetALLUser();
        $this->view('home/index' ,['title' => 'Home','data'=>'$data']);

    }

     public function add(){   
        echo "hi";
     }


     public function login(){
        $this->view('home/login',['title' => 'Login']);
     }

     public function postlogin(){
      //  $validator = new Validator();

     //  $v=$validator->make($_POST,[
      //  'email' => 'required|email',
      // ]);
      //$gump = new GUMP();
      $v=GUMP::is_valid($_POST,[
         'email' => 'required'
         ]);
       //print_r($v);
      //  print_r($_POST);
      if($v==1){
        $user=new user();
        $data =$user->GetUser($_POST['email'],$_POST['password']);
        Session::set('user',$data);
            header('LOCATION: user/index');
      }
     }
}
?>