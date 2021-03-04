<?php 

class Tipe_model {
    private $table = "tb_tipe";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTipe() {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}





?>