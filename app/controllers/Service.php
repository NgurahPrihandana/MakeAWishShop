<?php 

class Service extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Product";
        $data['set_active'] = "service";
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/service');
        $this->view('home/layouts/footer');
    }
}




?>