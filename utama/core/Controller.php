<?php

class Controller {
    public function view($view, $data = []) 
    {
        require_once '../utama/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../utama/models/' . $model . '.php';
        return new $model;
    }
}