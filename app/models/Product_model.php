<?php

class Product_model
{
    private $table = 'tb_product';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM $this->table INNER JOIN tb_kategori ON $this->table.id_kategori = tb_kategori.id_kategori 
                INNER JOIN tb_tipe ON $this->table.id_tipe = tb_tipe.id_tipe";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getSpcProduct($data)
    {
        $query = "SELECT * FROM $this->table INNER JOIN tb_kategori ON $this->table.id_kategori = tb_kategori.id_kategori 
                    INNER JOIN tb_tipe ON $this->table.id_tipe = tb_tipe.id_tipe WHERE id_product = :id";
        $this->db->query($query);
        $this->db->bind('id', $data);
        return $this->db->single();
    }

    public function tambahProduct($data)
    {
        if (isset($_FILES['gambar_product']['name']) && $_FILES['gambar_product']['error'] <= 0) {
            // find image location
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR ."product" .DIRECTORY_SEPARATOR;
            $targetFile = $targetDir . basename($_FILES['gambar_product']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;
            $check = getimagesize($_FILES['gambar_product']['tmp_name']);
            if ($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                Flasher::setFlash('error', "Your file was not uploaded");
            } else {
                if (move_uploaded_file($_FILES['gambar_product']['tmp_name'], $targetFile)) {
                    $query = "INSERT INTO $this->table (`nama_product`,`id_kategori`,`id_tipe`,`harga_product`,`gambar_product`,`deskripsi_product`)
                                VALUES 
                                (:nama_product,:id_kategori,:id_tipe,:harga_product,:gambar_product,:deskripsi_product)";
                    $this->db->query($query);
                    $this->db->bind("nama_product", $data['nama_product']);
                    $this->db->bind("id_kategori", $data['id_kategori']);
                    $this->db->bind("id_tipe", $data['id_tipe']);
                    $this->db->bind("harga_product", $data['harga_product']);
                    $this->db->bind("gambar_product", $_FILES['gambar_product']['name']);
                    $this->db->bind("deskripsi_product", $data['deskripsi_product']);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {
                }
            }
        }
        return null;
    }

    public function updateProduct($data)
    {
        if (isset($_FILES['gambar_product']['name']) && $_FILES['gambar_product']['error'] <= 0) 
        {
            // find image location
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR ."product" .DIRECTORY_SEPARATOR;
            $targetFile = $targetDir . basename($_FILES['gambar_product']['name']);
            $extension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;

            $check = getimagesize($_FILES['gambar_product']['tmp_name']);
            if ($check != false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "svg") {
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                Flasher::setFlash('error', "Your file was not uploaded");
                return false;
            } else {
                if (move_uploaded_file($_FILES['gambar_product']['tmp_name'], $targetFile)) {                   
                    $query = "UPDATE $this->table 
                                SET 
                                `nama_product` = :nama_product,
                                `id_kategori` = :id_kategori,
                                `id_tipe` = :id_tipe,
                                `harga_product` = :harga_product,
                                `gambar_product` = :gambar_product,
                                `deskripsi_product` = :deskripsi_product
                                WHERE id_product = :id_product";
                    $this->db->query($query);
                    $this->db->bind("nama_product", $data['nama_product']);
                    $this->db->bind("id_kategori", $data['id_kategori']);
                    $this->db->bind("id_tipe", $data['id_tipe']);
                    $this->db->bind("harga_product", $data['harga_product']);
                    $this->db->bind("gambar_product", $_FILES['gambar_product']['name']);
                    $this->db->bind("deskripsi_product", $data['deskripsi_product']);
                    $this->db->bind("id_product", $data['id_product']);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {
                    return false;
                }
            }
        } else {
            $queryNoImg = "UPDATE $this->table SET 
                        `nama_product` = :nama_product,
                        `id_kategori` = :id_kategori,
                        `id_tipe` = :id_tipe,
                        `harga_product` = :harga_product,
                        `deskripsi_product` = :deskripsi_product
                        WHERE id_product = :id_product";
            $this->db->query($queryNoImg);
            $this->db->bind("nama_product", $data['nama_product']);
            $this->db->bind("id_kategori", $data['id_kategori']);
            $this->db->bind("id_tipe", $data['id_tipe']);
            $this->db->bind("harga_product", $data['harga_product']);
            $this->db->bind("deskripsi_product", $data['deskripsi_product']);
            $this->db->bind("id_product", $data['id_product']);
            $this->db->execute();
            return true;
        }
    }

    public function hapusProduct($data)
    {
        $spcProduct = $this->getSpcProduct($data);
        $gambar = $spcProduct['gambar_product'];
        unlink(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $gambar);
        $query = "DELETE FROM $this->table WHERE id_product = :id";
        $this->db->query($query);
        $this->db->bind('id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
