<?php

class Controller
{
    public function view($view, $data = []){
        require_once BASEURL.'app/views/' . $view . '.php';
    }

    public function model($model){
        require_once BASEURL.'app/models/' . $model . '.php';
        return new $model;
    }

} 
