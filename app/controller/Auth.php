<?php

class Auth extends Controller {
    public function index($id = 0){
        
        $data['id_person'] = $id;
        $data['title'] = "Login";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('component/Navbar', $data);
            $this->view('auth/index', $data);
        $this->view('templates/footer');
    }
}