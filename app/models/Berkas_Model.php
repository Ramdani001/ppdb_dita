<?php

class Berkas_Model{

    private $table = "user";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function profile($data){

        $nameFile   = $_FILES['foto_siswa']['name'];
        $ukuran     = $_FILES['foto_siswa']['size'];
        $tmpName    = $_FILES['foto_siswa']['tmp_name'];

        var_dump($tmpName);
        die();

    }

}