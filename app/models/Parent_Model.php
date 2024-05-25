<?php

class Parent_Model{

    private $table = "parents";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }



}