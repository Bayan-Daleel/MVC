<?php

use MVC\core\Controller;

class Adminpost extends controller {

public function index() {   

    $this->view('back/index' ,['title' => 'Admin']);
}
}

?>