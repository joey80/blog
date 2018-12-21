<?php

class Pages extends Controller {

    public function __construct() {
        echo 'hello from pages ';
    }

    public function index() {
        echo 'hello from index ';
        $this->view('index');
    }

    public function about($id) {
        echo $id;
    }
}