<?php

class User_model{
    private $dbh;
    private $stmt;

    public function __construct(){
        // Datasource Name
        $dsn = 'mysql:host=localhost;dbname=db_profita';
        
        try {
            $this->dbh = new PDO($dsn, 'root', '');
            
        } catch (PDOException $error) {
            die($error->getMessage());
        }
        
    }

    public function getUser(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM person');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}