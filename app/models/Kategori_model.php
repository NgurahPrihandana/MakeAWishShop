<?php 

class Kategori_model {
    private $table = "tb_kategori";
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function tambahKategori($data) {
        if(isset($_FILES['icon-kategori']['name']) && $_FILES['icon-kategori']['error'] <= 0) {
            // find image location
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR;
            $targetFile = $targetDir . basename($_FILES['icon-kategori']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;

            $check = getimagesize($_FILES['icon-kategori']['tmp_name']);
            if($check != false) {
                echo "File is an image - " . $check['mime'] . ".";
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                echo "Sorry, only JPG, JPEG, PNG, and SVG images are allowed";
                $uploadOk = 0;
            }
            if($uploadOk == 0) {
                echo "Sorry, your file was not uploaded";
            } else {
                if(move_uploaded_file($_FILES['icon-kategori']['tmp_name'], $targetFile)) {
                    echo "The file " . basename($_FILES['icon-kategori']['name']) . " has been uploaded";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $query = "INSERT INTO $this->table (`kategori`,`icon-kategori`)
                        VALUES 
                        (:kategori,:icon-kategori)";
            $this->db->query($query);
            $this->db->bind("kategori",$data['kategori']);
            $this->db->bind("icon-kategori",$_FILES['icon-kategori']['nama']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
}




?>