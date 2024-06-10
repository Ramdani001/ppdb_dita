<?php

class AdminController extends Controller {
    private $db;

    public function __construct(){
        $this->db = new Database;
    } 
    
    public function index($id = 0){
        
        $data['id_person'] = $id;
        $data['title'] = "SMK PROFITA | DASHBOARD";
        $data['person'] = $this->model('User_model')->getUser();

        $person = (object) $data['person'];

        // var_dump($data['person']);
        // die();
        $this->view('templates/header', $data);
        
        $this->view('section/navbar', $data);
        $this->view('section/heroSection', $data);
        $this->view('section/profileSection', $data);
        $this->view('section/Ekstrakulikuler', $data);
        $this->view('section/GaleriSection', $data);
        $this->view('section/BeritaSection', $data);
        $this->view('section/KontakSection', $data);

        $this->view('templates/footer');
    } 

    public function Auth($type){
        if($type == 'login'){
            $send = $this->model('User_model')->login($_POST);
            
            if($send[1]['SESSION'] > 0){

                $id_person = $send[0]['BERHASIL'];
                
                $sql = "SELECT tipe FROM person WHERE id_person = :id_person";
                $this->db->query($sql);
                $this->db->bind(':id_person', $id_person);
                $this->db->execute();
                
                if($this->db->single()['tipe'] == 3){
                    header('Location: '. BASEURL .'PPDBController/index/'.$id_person);
                }else{
                    header('Location: '. BASEURL .'ViewAdminController/index/'.$id_person);
                }
                exit;
            }else{  
                Flasher::setFlash('Gagal Login Mohon periksan emil & password', 'Login', 'danger');

                header('Location: '. BASEURL .'LoginController');
                exit;
            }
        }else if($type == 'register'){
            
            if($this->model('User_model')->register($_POST)){
                Flasher::setFlash('Selamat Bergabung', 'Login', 'success');
                $_SESSION['message'] = 'Berhasil dibuat!';
                header('Location: '. BASEURL .'LoginController');
                exit;
            }else{
                $_SESSION['message'] = 'Gagal dibuat!';
                header('Location: '. BASEURL .'AdminController');
                exit;
            }
        }
    }



}