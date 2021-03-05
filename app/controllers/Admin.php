<?php 

class Admin extends Controller {
    public function index() {
        $data['set_active'] = "index";
        $data['title'] = "Dashboard";
        $this->view('admin/layouts/header',$data);
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/index');
        $this->view('admin/layouts/footer');
    }

    public function kategori() {
        $data['set_active'] ="kategori";
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $data['title'] = "Kategori";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/kategori',$data);
        $this->view('admin/layouts/footer');
    }

    public function tambah_kategori() {
        if($this->model("Kategori_model")->tambahKategori($_POST) > 0) {
            Flasher::setFlash('success','Tambah kategori berhasil');
            header('Location: ' . BASEURL . '/admin/kategori');
        } else {
            Flasher::setFlash('error','Tambah kategori gagal');
            header('Location: ' . BASEURL . '/admin/kategori');
        }
    }

    public function edit_kategori($id) {
        $data['set_active'] ="kategori";
        $data['spcKategori'] = $this->model('Kategori_model')->getSpcKategori($id);
        $data['title'] = "Kategori";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/edit_kategori',$data);
        $this->view('admin/layouts/footer');
    }

    public function update_kategori() {
        if ($this->model("Kategori_model")->updateKategori($_POST) > 0) {
            Flasher::setFlash('success', 'Update kategori sukses');
            header('Location: ' . BASEURL . '/admin/kategori');
        } else {
            Flasher::setFlash('error', 'Update kategori gagal');
            header('Location: ' . BASEURL . '/admin/kategori');
        }
    }

    public function hapus_kategori($id) {
        if ($this->model("Kategori_model")->hapusKategori($id) > 0) {
            Flasher::setFlash('success', 'Delete kategori sukses');
            header('Location: ' . BASEURL . '/admin/kategori');
        } else {
            Flasher::setFlash('error', 'Delete kategori gagal');
            header('Location: ' . BASEURL . '/admin/kategori');
        }
    }

    public function product() {
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $data['tipe'] = $this->model('Tipe_model')->getAllTipe();
        $data['set_active'] = "product";
        $data['title'] = "Product";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/product',$data);
        $this->view('admin/layouts/footer');
    }

    public function tambah_product() {
        if($this->model("Product_model")->tambahProduct($_POST) > 0) {
            Flasher::setFlash('success','Tambah product berhasil');
            header('Location: ' . BASEURL . '/admin/product');
        } else {
            Flasher::setFlash('error','Tambah product gagal');
            header('Location: ' . BASEURL . '/admin/product');
        }
    }

    public function edit_product($id) {
        $data['spcProduct'] = $this->model('Product_model')->getSpcProduct($id);
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $data['tipe'] = $this->model('Tipe_model')->getAllTipe();
        $data['set_active'] = "product";
        $data['title'] = "Product";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar',$data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/edit_product',$data);
        $this->view('admin/layouts/footer');
    }

    public function update_product() {
        $data = $this->model("Product_model")->updateProduct($_POST);
        if ( $data > 0) {
            Flasher::setFlash('success', 'Update product sukses');
            header('Location: ' . BASEURL . '/admin/product');
        } else {
            Flasher::setFlash('error', 'Update product gagal');
            header('Location: ' . BASEURL . '/admin/product');
        }
    }

    public function hapus_product($id) {
        if($this->model("Product_model")->hapusProduct($id) > 0) {
            Flasher::setFlash('success','Delete product sukses');
            header('Location: ' . BASEURL . '/admin/product');
        } else {
            Flasher::setFlash('error','Delete product gagal');
            header('Location: ' . BASEURL . '/admin/product');
        }
    }

    public function message() {
        $data['message'] = $this->model("Message_model")->getAllMessage();
        $data['set_active'] = "message";
        $data['title'] = "Message";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar', $data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/message',$data);
        $this->view('admin/layouts/footer');
    }

    public function hapus_message($id) {
        if($this->model("Message_model")->hapusMessage($id) > 0) {
            Flasher::setFlash('success','Delete message sukses');
            header('Location: ' . BASEURL . '/admin/message');
        } else {
            Flasher::setFlash('error','Delete message gagal');
            header('Location: ' . BASEURL . '/admin/message');
        }
    }

    public function tambah_message() {
        if($this->model("Message_model")->tambahMessage($_POST) > 0) {
            Flasher::setFlash('success','Succesfully send message');
            header('Location: ' . BASEURL . '/message/index');
        } else {
            Flasher::setFlash('error','Failed to send message, please try again later');
            header('Location: ' . BASEURL . '/message/index');
        }
    }

    public function review() {
        $data['set_active'] = "review";
        $data['title'] = "Review";
        $data['review'] = $this->model('Review_model')->getAllReview();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar', $data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/review',$data);
        $this->view('admin/layouts/footer');
    }

    public function edit_review($id) {
        $data['set_active'] = "review";
        $data['title'] = "Review";
        $data['spcReview'] = $this->model('Review_model')->getSpcReview($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar', $data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/edit_review',$data);
        $this->view('admin/layouts/footer');
    }

    public function update_review() {
        if ($this->model("Review_model")->updateReview($_POST) > 0) {
            Flasher::setFlash('success', 'Update review sukses');
            header('Location: ' . BASEURL . '/admin/review');
        } else {
            Flasher::setFlash('error', 'Update review gagal');
            header('Location: ' . BASEURL . '/admin/review');
        }
    }
}



?>