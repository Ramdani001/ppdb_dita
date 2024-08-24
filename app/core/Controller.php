<?php

require_once __DIR__ . '/../../vendor/autoload.php';

class Controller
{
    public function view($view, $data = [])
    {
        require_once __DIR__ . '/../../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        // Sesuaikan path ke model sesuai dengan konfigurasi autoloading
        $modelClass = 'app\\Models\\' . $model;
        return new $modelClass;
    }
}
