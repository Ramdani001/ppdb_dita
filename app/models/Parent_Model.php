<?php

class Parent_Model{

    private $table = "parents";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function insert(){
        date_default_timezone_set('Asia/Jakarta');

        $operators = ['+', '-', '*', '/'];
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = $operators[array_rand($operators)];

        if ($operator == '/') {
            $num2 = rand(1, 10); 
            $num1 = $num2 * rand(1, 10); 
        }

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
        }
        // =====================================
 
        $email = $_POST['email'];

        $query = "SELECT * FROM person WHERE email=:email";

        $this->db->query($query);
        $this->db->bind(':email', $email);
        $this->db->execute();
        $id_person = $this->db->single()['id_person'];
        

        $queryS = "SELECT id_siswa FROM siswa WHERE id_person=:id_person";
        $this->db->query($queryS);
        $this->db->bind(':id_person', $id_person);
        $this->db->execute();

        $id_siswas = $this->db->single()['id_siswa'];

        
        $Check = "SELECT * FROM parents WHERE id_siswa=:id_siswaS";
        $this->db->query($Check);
        $this->db->bind(':id_siswaS', (int)$id_siswas);
        $this->db->execute();
        $id_check = $this->db->single()['id_siswa'];

        
        if(empty($id_check)){
            
            
            $queryP = "INSERT INTO parents VALUES (:id_parent, :id_siswa, :nik_ayah, :nama_ayah, :lhir_ayah, :tgl_lhr_ayah, :pendidikan_ayah, :pekerjaan_ayah, :penghasilan_ayah, :status_ayah, :nik_ibu, :nama_ibu, :lhir_ibu, :tgl_lhr_ibu, :no_ibu, :pendidikan_ibu, :penghasilan_ibu)";
            $this->db->query($queryP);
            // var_dump(date('Y-m-d H:i:s'));
            // die();
            $this->db->bind(':id_parent', $result);
            $this->db->bind(':id_siswa', $id_siswas);
            $this->db->bind(':nik_ayah', $_POST['nik_ayah']);
            $this->db->bind(':nama_ayah', $_POST['nama_ayah']);
            $this->db->bind(':lhir_ayah', $_POST['lhr_ayah']);
            $this->db->bind(':tgl_lhr_ayah', date('Y-m-d'));
            $this->db->bind(':pendidikan_ayah', $_POST['pendidikan_ayah']);
            $this->db->bind(':pekerjaan_ayah', $_POST['pekerjaan_ayah']);
            $this->db->bind(':penghasilan_ayah', $_POST['penghasilan_ayah']);
            $this->db->bind(':status_ayah', $_POST['status_ayah']);
            $this->db->bind(':nik_ibu', $_POST['nik_ibu']);
            $this->db->bind(':nama_ibu', $_POST['nama_ibu']);
            $this->db->bind(':lhir_ibu', $_POST['lhr_ibu']);
            $this->db->bind(':tgl_lhr_ibu', $_POST['tgl_lhir_ibu']);
            $this->db->bind(':no_ibu', $_POST['no_ibu']);
            $this->db->bind(':pendidikan_ibu', $_POST['pendidikan_ibu']);
            $this->db->bind(':penghasilan_ibu', $_POST['penghasilan_ibu']);
            $this->db->execute();
        }else{
            
        }
        

        
    }



}