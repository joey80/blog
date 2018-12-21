<?php

    echo 'hello from index ';

    function __autoload($classname) {
        require_once('../src/libraries/' . $classname . '.php');
    }  
    
    //require_once '../src/libraries/Core.php';
    //require_once '../src/libraries/Controller.php';

    // Init core library
    $init = new Core();

    //require_once '../src/bootstrap.php';