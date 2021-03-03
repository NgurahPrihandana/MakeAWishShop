<?php 

class Home extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Home";
        $data['set_active'] = "home";
        $this->view("home/layouts/header",$data);
        $this->view("home/layouts/navbar",$data);
        $this->view("home/index");
        $this->view("home/layouts/footer");
    }
}



?>