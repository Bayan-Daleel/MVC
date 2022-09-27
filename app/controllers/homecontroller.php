<?php
namespace MVC\Controllers;

use MVC\core\Controller;

class homeController extends Controller{

    public function index(){
      
        $this->view('home/index',['title' => 'Home']);

    }

public function details(){
    $this->view('home/details',['title' => 'Details']);
}
}