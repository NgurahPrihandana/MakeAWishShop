<?php 

class Product extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Product";
        $data['set_active'] = "product";
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/product',$data);
        $this->view('home/layouts/footer');
    }
}





?>