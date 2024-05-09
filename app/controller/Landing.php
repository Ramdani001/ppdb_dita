<?php

class Landing extends Controller {
    public function index($id = 0){
        
        $data['id_person'] = $id;
        $data['title'] = "SMK PROFITA";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('section/Navbar', $data);
            $this->view('section/HeroSection', $data);
            $this->view('section/ProfileSection', $data);
            $this->view('section/Ekstrakulikuler', $data);
            $this->view('section/GaleriSection', $data);
            $this->view('section/BeritaSection', $data);
            $this->view('section/KontakSection', $data);
            $this->view('section/Footer', $data);
        $this->view('templates/footer');
    }
}