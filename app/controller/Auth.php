<?php

    class Auth extends Controller {
        public function index($id = 0){
            
            $data['id_person'] = $id;
            $data['title'] = "Login";

            $this->view('templates/header', $data);
                $this->view('auth/index', $data);
            $this->view('templates/footer');
        }
    }
