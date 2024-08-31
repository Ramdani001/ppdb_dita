<?php

class Controller
{
    public function view($view, $data = []){
        require_once BASEURL.'views/' . $view . '.php';
    }

    public function model($model){
        require_once BASEURL.'models/' . $model . '.php';
        return new $model;
    }

} 
