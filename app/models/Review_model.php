<?php 

class Review_model {
    private $table = "tb_review";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReview() {
        $sql = "SELECT * FROM $this->table";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getSpcReview($data) {
        $sql = "SELECT * FROM $this->table WHERE id_review = :id";
        $this->db->query($sql);
        $this->db->bind("id",$data);
        return $this->db->single();
    }

    public function updateReview($data) {
         // find image location
         if (isset($_FILES['img_profile']['name']) && $_FILES['img_profile']['error'] <= 0) {
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "review" . DIRECTORY_SEPARATOR;
            $rand = rand();

            
            $check = getimagesize($_FILES['img_profile']['tmp_name']);
            if ($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
            $xx = $rand.'_'.$_FILES['img_profile']['name'];
            
            $targetFile = $targetDir . $rand . "_" . basename($_FILES['img_profile']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                Flasher::setFlash('error', "Your file was not uploaded");
            } else {
                if (move_uploaded_file($_FILES['img_profile']['tmp_name'], $targetFile)) {
                } else {
                    Flasher::setFlash('error', "Sorry, there was an error where we uploaded your file");
                }
            }

            $spcKategori = $this->getSpcReview($data['id_review']);
            $gambar = $spcKategori['img_profile'];
            unlink(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "review" . DIRECTORY_SEPARATOR . $gambar);
            $query = "UPDATE $this->table 
                        SET 
                        `name` = :name,
                        `review` = :review,
                        `img_profile` = :img_profile 
                        WHERE id_review = :id_review";
            $this->db->query($query);
            $this->db->bind("name",$data['name']);
            $this->db->bind("review", $data['review']);
            $this->db->bind("img_profile", $xx);
            $this->db->bind("id_review", $data['id_review']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $query = "UPDATE $this->table 
                        SET 
                        `name` = :name,
                        `review` = :review
                        WHERE id_review = :id_review";
            $this->db->query($query);
            $this->db->bind("name",$data['name']);
            $this->db->bind("review", $data['review']);
            $this->db->bind("id_review", $data['id_review']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
}



?>