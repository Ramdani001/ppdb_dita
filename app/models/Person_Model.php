<?php

class User_model{

    private $table = "person";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUser(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function register($data){
        $email = $data['email'];
        $type = 'siswa';
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO $table VALUES ('', :name, '', :email, '', :type, :created_at)";
        $this->db->query($query);
        $this->db->bind('type', $type);
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('created_at', $created_at);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

}