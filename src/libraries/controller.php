<?php

/**
* Controller.php - Base controller for app
*
* Author - Joey Leger (2018)
* Description - Loads the models and views
*
*/

echo 'inside of controller ';

class Controller {

    // Load model
    public function model($model) {

        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instatiate model
        return new $model();

    }

    // Load view
    public function view($view, $data = []) {

        echo 'hello from view';

        // Check for the view file
        // if (file_exists('../src/views/' . $view . '.php')) {
        //     require_once '../src/views/' . $view . '.php';
        // } else {
        //     die('View does not exist');
        // }
    }
}