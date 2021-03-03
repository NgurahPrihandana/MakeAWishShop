<?php 

class Message extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Message Us";
        $data['set_active'] = "message";
        $this->view('home/layouts/header',$data);
        $this->view('home/layouts/navbar',$data);
        $this->view('home/message_us');
        $this->view('home/layouts/footer');
    }
}



?>