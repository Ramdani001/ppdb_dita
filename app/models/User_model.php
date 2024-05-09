<?php

class User_model{

    private $table = "user";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUser(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function register($data){
        // var_dump($data);
        // die();
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $password = hash('sha256', $_POST['password']);

        $type = 3;
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO person VALUES ('', '', :name, :email, :type, '', :created_at, '')";
        $this->db->query($query);
        $this->db->bind('type', $type);
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('created_at', $created_at);
        
        $this->db->execute();

        if ($this->db->rowCount() == 0) {
            return false; // Gagal memasukkan data ke tabel person
        }
        // ======
        $this->db->query('SELECT id_person FROM person WHERE email=:email');
        $this->db->bind(':email', $email);
        $id_person = $this->db->single();
        // var_dump($id_person['id_person']);
        // die();
        $query = "INSERT INTO user VALUES ('', :id_person, :email, :password, :created_at, '')";
        $this->db->query($query);
        $this->db->bind(':id_person', $id_person['id_person']);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('created_at', $created_at);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data){
        // var_dump($data); 
        // die();
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);

        $sql = "SELECT * FROM user WHERE email = :email";
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $this->db->execute();

        try {
            $this->db->execute();

            if($this->db->rowCount() > 0){
                $result = $this->db->single()['password'];
                $checked = strcasecmp($password, $result);
                // var_dump($password);
                // die();
                if($checked === 0){
                    $_SESSION['id_person'] = $this->db->single()['id_person'];
                    $send = [
                        ['SESSION' => $_SESSION['id_person'] = $this->db->single()['id_person']],
                        ['SESSION' => $this->db->rowCount()]
                    ];                    
                    return $send;
                }else{
                    $send = [
                        ['SESSION' => 'Gagal Login']
                    ];
                    return $send;
                }
            }else{
                return $this->db->rowCount();
            }

        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

}