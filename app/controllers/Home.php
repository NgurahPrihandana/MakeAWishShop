<?php 

class Home extends Controller {
    public function index() {
        $data['title'] = "Make A Wish - Home";
        $data['set_active'] = "home";
        $data['featured_product'] = $this->model('Product_model')->getAllFeaturedProduct();
        $data['review'] = $this->model("Review_model")->getAllReview();
        // $data['featured_roduct'] = $this->model("Product_model")->getAllFeaturedProduct();
        $this->view("home/layouts/header",$data);
        $this->view("home/layouts/navbar",$data);
        $this->view("home/index",$data);
        $this->view("home/layouts/footer");
    }
}



?>