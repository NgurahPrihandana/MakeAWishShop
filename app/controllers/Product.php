<?php 

class Product extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Product";
        $data['set_active'] = "product";
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/product');
        $this->view('home/layouts/footer');
    }
}





?>