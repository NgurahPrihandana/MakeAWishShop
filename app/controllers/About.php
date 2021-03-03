<?php 

class About extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - About Us";
        $data['set_active'] = "about";
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/about');
        $this->view('home/layouts/footer');
    }
}






?>