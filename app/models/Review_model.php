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
}



?>