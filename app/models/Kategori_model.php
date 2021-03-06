<?php

class Kategori_model
{
    private $table = "tb_kategori";
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function tambahKategori($data)
    {
        if (isset($_FILES['icon_kategori']['name']) && $_FILES['icon_kategori']['error'] <= 0) {
            // find image location
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "icon".DIRECTORY_SEPARATOR;
            $rand = rand();
            
            $check = getimagesize($_FILES['icon_kategori']['tmp_name']);
            if ($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
            $xx = $rand.'_'.$_FILES['icon_kategori']['name'];
            
            $targetFile = $targetDir . $rand . "_" . basename($_FILES['icon_kategori']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;

            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                Flasher::setFlash('error', "Your file was not uploaded");
            } else {
                if (move_uploaded_file($_FILES['icon_kategori']['tmp_name'], $targetFile)) {
                    $query = "INSERT INTO $this->table (`kategori`,`icon_kategori`)
                                    VALUES 
                                    (:kategori,:icon_kategori)";
                    $this->db->query($query);
                    $this->db->bind("kategori", $data['kategori']);
                    $this->db->bind("icon_kategori", $xx);
                    $this->db->execute();
                    return $this->db->rowCount();       
                } else {
                    Flasher::setFlash('error', "Sorry, there was an error where we uploaded your file");
                    return null;
                }
            }
    
        }
    }

    public function getSpcKategori($data)
    {
        $query = "SELECT * FROM $this->table WHERE id_kategori = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);
        return $this->db->single();
    }

    public function updateKategori($data)
    {
        // find image location
        if (isset($_FILES['icon_kategori']['name']) && $_FILES['icon_kategori']['error'] <= 0) {
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "icon" . DIRECTORY_SEPARATOR;
            $rand = rand();
            
            
            $check = getimagesize($_FILES['icon_kategori']['tmp_name']);
            if ($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
            $xx = $rand.'_'.$_FILES['icon_kategori']['name'];

            $targetFile = $targetDir . $rand . "_" . basename($_FILES['icon_kategori']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;

            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                Flasher::setFlash('error', "Your file was not uploaded");
            } else {
                if (move_uploaded_file($_FILES['icon_kategori']['tmp_name'], $targetFile)) {
                } else {
                    Flasher::setFlash('error', "Sorry, there was an error where we uploaded your file");
                }
            }
            $spcKategori = $this->getSpcKategori($data['id_kategori']);
            $gambar = $spcKategori['icon_kategori'];
            unlink(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "icon" . DIRECTORY_SEPARATOR . $gambar);
            $query = "UPDATE $this->table 
                        SET 
                        `kategori` = :kategori,
                        `icon_kategori` = :icon_kategori 
                        WHERE id_kategori = :id_kategori";
            $this->db->query($query);
            $this->db->bind("kategori", $data['kategori']);
            $this->db->bind("icon_kategori", $xx);
            $this->db->bind("id_kategori", $data['id_kategori']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $query = "UPDATE $this->table 
                        SET 
                        `kategori` = :kategori
                        WHERE id_kategori = :id_kategori";
            $this->db->query($query);
            $this->db->bind("kategori", $data['kategori']);
            $this->db->bind("id_kategori", $data['id_kategori']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function hapusKategori($data)
    {
        $spcKategori = $this->getSpcKategori($data);
        $gambar = $spcKategori['icon_kategori'];
        unlink(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "icon" . DIRECTORY_SEPARATOR . $gambar);
        $query = "DELETE FROM $this->table WHERE id_kategori = :id";
        $this->db->query($query);
        $this->db->bind('id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
