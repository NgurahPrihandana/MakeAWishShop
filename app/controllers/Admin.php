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
        $data['set_active'] = "product";
        $data['title'] = "Product";
        $this->view('admin/layouts/header', $data);
        $this->view('admin/layouts/navbar', $data);
        $this->view('admin/layouts/topnav');
        $this->view('admin/product');
        $this->view('admin/layouts/footer');
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
}



?>