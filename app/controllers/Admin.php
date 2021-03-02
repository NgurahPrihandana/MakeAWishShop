<?php 

class Admin extends Controller {
    public function index() {
        $data['set_active'] = "index";
        $this->view('admin/layouts/header');
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/index');
        $this->view('admin/layouts/footer');
    }

    public function kategori() {
        $data['set_active'] ="kategori";
        $this->view('admin/layouts/header');
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/kategori');
        $this->view('admin/layouts/footer');
    }
}



?>