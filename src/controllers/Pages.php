<?php

class Pages {

    public function __construct() {
        echo 'Pages loaded ';
    }

    public function index() {
        echo 'hello from index';
    }

    public function about($id) {
        echo $id;
    }
}