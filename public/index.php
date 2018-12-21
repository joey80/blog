<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    echo 'hello from index ';

    function __autoload($classname) {
        require_once('../src/libraries/' . $classname . '.php');
    }

    // Init core library
    $init = new Core();