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

    public function categories($id) {
        $data['productbyKategori'] = $this->model("Product_model")->getProductByKategori($id);
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $data['id'] = $id;
        $data['title'] = "Make A Wish - Product";
        $data['set_active'] = "product";
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/product_by_kategori',$data,$id);
        $this->view('home/layouts/footer');
    }

    public function detail_product($id) {
        $data['title'] = "Make A Wish - Product";
        $data['set_active'] = "product";
        $data['spcProduct'] = $this->model('Product_model')->getSpcProduct($id);
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/detail_product',$data);
        $this->view('home/layouts/footer');
    }
}





?>