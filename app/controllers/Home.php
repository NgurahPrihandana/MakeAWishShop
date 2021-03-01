<?php 

class Home extends Controller {
    public function index() {
        $this->view("layouts/header");
        $this->view("layouts/navbar");
        $this->view("home/index");
        $this->view("layouts/footer");
    }
}



?>