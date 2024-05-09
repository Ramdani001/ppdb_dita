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

        $this->view('templates/header', $data);
        
        $this->view('auth/index', $data);

        $this->view('templates/footer');
    }

    public function Auth($type){
        session_start();
        if($type == 'login'){
            $send = $this->model('User_model')->login($_POST);
            if($send[1]['SESSION'] > 0){
                
                $id_person = $send[0]['SESSION'];
                // var_dump($send[0]['SESSION']);
                // die;
                
                $sql = "SELECT type FROM person WHERE id_person = :id_person";
                $this->db->query($sql);
                $this->db->bind(':id_person', $id_person);
                $this->db->execute();

                // var_dump($this->db->single()['type']);
                // die();

                if($this->db->single()['type'] == 'siswa'){
                    header('Location: '. BASEURL .'Landing');
                }else{
                    header('Location: '. BASEURL .'AdminController');
                }
                exit;
            }else{
                var_dump($send[1]['SESSION']);
                die();
                $_SESSION['message'] = 'Gagal login!';
                header('Location: '. BASEURL .'/AdminController');
                exit;
            }
        }else if($type == 'register'){
            if($this->model('User_model')->register($_POST)){
                $_SESSION['message'] = 'Berhasil dibuat!';
                header('Location: '. BASEURL .'/AdminController');
                exit;
            }else{
                $_SESSION['message'] = 'Gagal dibuat!';
                header('Location: '. BASEURL .'/AdminController');
                exit;
            }
        }
    }


}