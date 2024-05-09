<?php

class ViewAdminController extends Controller {
    public function index($id = 0){
        
        $data['id_person'] = $id;
        $data['title'] = "SMK PROFITA";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('admin/code/header', $data);
            $this->view('admin/dashboard');
        $this->view('admin/code/footer');


        
    }

}