<?php 

class Home extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Home";
        $this->view("home/layouts/header",$data);
        $this->view("home/layouts/navbar");
        $this->view("home/index");
        $this->view("home/layouts/footer");
    }
}



?>