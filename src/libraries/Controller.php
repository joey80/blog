<?php

/**
* Controller.php - Base controller for app
*
* Author - Joey Leger (2018)
* Description - Loads the models and views
*
*/

class Controller {

    // Load model
    public function model($model) {

        if (file_exists('../src/models/' . $model . '.php')) {
            require_once '../src/models/' . $model . '.php';
            return new $model();
        } else {
            die('model does not exist');
        }
    }

    // Load view
    public function view($view, $data = []) {

        // Check for the view file
        if (file_exists('../src/views/' . $view . '.php')) {
            require_once '../src/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }
}