<?php 

class Message_model {
    private $table = "tb_message";
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMessage() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function hapusMessage($data) {
        $query = "DELETE FROM $this->table WHERE id_message = :id";
        $this->db->query($query);
        $this->db->bind('id',$data);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahMessage($data) {
    $query = "INSERT INTO $this->table (`name`,`subject`,`email`,`message`)
                VALUES
                    (:name, :subject, :email, :message)";
        $this->db->query($query);
        $this->db->bind('name',$data['name']);
        $this->db->bind('subject',$data['subject']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('message',$data['message']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }
}






?>