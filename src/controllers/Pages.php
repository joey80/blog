<?php

class Pages extends Controller {

    public function __construct() {
    }

    public function index() {
        $this->view('index');
    }

    public function single() {
        $this->view('single');
    }

    public function about($id) {
        echo $id;
    }
}