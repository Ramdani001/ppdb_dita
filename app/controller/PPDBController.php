<?php

class PPDBController extends Controller {
    public function index($id = 0){
        
        $data['id_person'] = $id; 
        $data['title'] = "PPDB SMK PROFITA";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('admin/code/header', $data);
            $this->view('ppdb/dashboard');
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

}