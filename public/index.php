<?php

    require_once '../src/config/config.php';

    spl_autoload_register(function ($class) {
        include '../src/libraries/' . $class . '.php';
    });

    // Init core library
    $init = new Core();