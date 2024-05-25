<?php

class PPDBController extends Controller {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function index($id = 0){
        
        $id_person = (int)$id; 
        $data['title'] = "PPDB SMK PROFITA";

        $sql = "SELECT * FROM person WHERE id_person=".$id_person;
        $this->db->query($sql);
        $data['person'] = $this->db->single();
       
        $this->view('admin/code/header', $data);
            $this->view('ppdb/dashboard',  $data);
        $this->view('admin/code/footer');
    }

    public function berkas($id = 0){
        $id_person = (int)$id; 
        $data['title'] = "PPDB SMK PROFITA";

        $sql = "SELECT * FROM person WHERE id_person=".$id_person;
        $this->db->query($sql);
        $data['person'] = $this->db->single();

        $this->view('admin/code/header', $data);
            $this->view('ppdb/berkas', $data);
        $this->view('admin/code/footer');
    }
    public function cetakKartu($id = 0){
        $id_person = (int)$id; 
        $data['title'] = "PPDB SMK PROFITA";

        $sql = "SELECT * FROM person WHERE id_person=".$id_person;
        $this->db->query($sql);
        $data['person'] = $this->db->single();

        $this->view('admin/code/header', $data);
            $this->view('ppdb/cetakKartu', $data);
        $this->view('admin/code/footer');
    }

    public function user($id = 0){

        $data['id_person'] = $id;
        $data['title'] = "SMK PROFITA";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('admin/code/header');
            $this->view('admin/user');
        $this->view('admin/code/footer');
    }

    public function insertFormulir($id = 0){
        
        // $data = json_encode($_POST);
// Admin1234%
        // var_dump($data);
        // die();
        $person = $this->model('Person_Model')->update($_POST);
        // var_dump($person);
        // die();

        if($person > 0){
            $siswa = $this->model('Siswa_Model')->insert($_POST);

            if($siswa > 0){
                $id_person = (int)$id; 
                $data['title'] = "PPDB SMK PROFITA";

                $sql = "SELECT * FROM person WHERE id_person=".$id_person;
                $this->db->query($sql);
                $data['person'] = $this->db->single();
            
                header("Location: ".BASEURL."PPDBController/$id_person");
                exit(); 
            }

        }

    }

}