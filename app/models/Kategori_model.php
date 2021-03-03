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
            // find image location
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "..". DIRECTORY_SEPARATOR ."public". DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "icon";
            $targetFile = $targetDir . basename($_FILES['icon_kategori']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;

            $check = getimagesize($_FILES['icon_kategori']['tmp_name']);
            if($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if($uploadOk == 0) {
                Flasher::setFlash('error',"Your file was not uploaded");
            } else {
                if(move_uploaded_file($_FILES['icon_kategori']['tmp_name'], $targetFile)) {

                } else {
                Flasher::setFlash('error', "Sorry, there was an error where we uploaded your file");
                }
            }

            $query = "INSERT INTO $this->table (`kategori`,`icon_kategori`)
                        VALUES 
                        (:kategori,:icon_kategori)";
            $this->db->query($query);
            $this->db->bind("kategori",$data['kategori']);
            $this->db->bind("icon_kategori",$_FILES['icon_kategori']['name']);
            $this->db->execute();

            return $this->db->rowCount();
    }

    public function hapusKategori($data) {
        $query = "DELETE FROM $this->table WHERE id_kategori = :id";
        $this->db->query($query);
        $this->db->bind('id',$data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}




?>