<?php

    function __autoload($classname) {
        require_once('../src/libraries/' . $classname . '.php');
    }

    // Init core library
    $init = new Core();