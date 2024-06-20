<?php

class ViewAdminController extends Controller {
    public function index($id = 0){
        
        $data['id_person'] = $id;
        $data['title'] = "SMK PROFITA";

        $data['auth'] = $this->model('Person_model')->getById($_SESSION["id_person"]);

        $this->view('admin/code/header', $data);
            $this->view('admin/dashboard', $data);
        $this->view('admin/code/footer');
    }
    
    public function user($id = 0){

        $data['id_person'] = $id; 
        $data['title'] = "SMK PROFITA";

        $data['list_person'] = $this->model('Person_model')->getUser();
        $data['auth'] = $this->model('Person_model')->getById($_SESSION["id_person"]);

        $this->view('admin/code/header', $data);
            $this->view('admin/user', $data);
        $this->view('admin/code/footer');
    }

    public function siswaDaftar($id = 0){
        $data['title'] = "SMK PROFITA";

        $data['list_siswa'] = $this->model('Siswa_model')->getAll();
        $data['auth'] = $this->model('Person_model')->getById($_SESSION["id_person"]);

        $this->view('admin/code/header', $data);
            $this->view('admin/siswaDaftar', $data);
        $this->view('admin/code/footer');
    }

    public function laporan(){
        $data['title'] = "SMK PROFITA";

        $data['list_siswa'] = $this->model('Siswa_model')->getAll();
        $data['auth'] = $this->model('Person_model')->getById($_SESSION["id_person"]);

        $this->view('admin/code/header', $data);
            $this->view('admin/laporan', $data);
        $this->view('admin/code/footer');
    }

}