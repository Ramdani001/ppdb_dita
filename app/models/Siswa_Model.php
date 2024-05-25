<?php

class Siswa_Model{

    private $table = "siswa";
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

        $email    = $_POST['email'];
        
        $created_at = date('Y-m-d H:i:s');

        // $sql = "SELECT id_person FROM person WHERE email = :email";
        // $this->db->query($sql);
        // $this->db->bind(':email', $email);
        // $id_person = $this->db->single()['id_person'];
        // $id_person = (int)$id_person;

        $query = "INSERT INTO siswa VALUES (:result, :id_person, :no_pendaftaran, :asal_sekolah, :nisn, :nik, :biaya_sekolah, :sd, :smp, :kip, :cita_cita, :hobi, :anak_ke, :transportasi, :jarak_sekolah, :waktu_tempuh, :jml_saudara, :created_at, :created_at)";
        $this->db->query($query);

        $this->db->bind(':result', $result);
        $this->db->bind(':id_person', $_POST['id_person']);
        $this->db->bind(':no_pendaftaran', $_POST['no_pendaftaran']);
        $this->db->bind(':asal_sekolah', $_POST['asal_sekolah']);
        $this->db->bind(':nisn', $_POST['nisn']);
        $this->db->bind(':nik', $_POST['nik']);
        $this->db->bind(':nisn', $_POST['nisn']);
        $this->db->bind(':biaya_sekolah', $_POST['biaya_sekolah']); 
        $this->db->bind(':sd', $_POST['paud']);
        $this->db->bind(':smp', $_POST['tk']);
        $this->db->bind(':kip', $_POST['kip']);
        $this->db->bind(':cita_cita', $_POST['cita_cita']);
        $this->db->bind(':hobi', $_POST['hobi']);
        $this->db->bind(':anak_ke', $_POST['anak_ke']);
        $this->db->bind(':transportasi', $_POST['transportasi']);
        $this->db->bind(':jarak_sekolah', $_POST['jarak_kesekolah']);
        $this->db->bind(':waktu_tempuh', $_POST['waktu_tempuh']);
        $this->db->bind(':jml_saudara', $_POST['jml_saudara']);
        $this->db->bind(':created_at', $created_at);
        $this->db->execute();
        return $this->db->rowCount();
        
    }

}
