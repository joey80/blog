<?php

/**
* Core.php - Core controller
*
* Author - Joey Leger (2018)
* Description - Creates URL & Loads core controller
*               URL format = /controller/method/params
*
*/

class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {

        $url = $this->getUrl();

        // Look in controllers for first value
        if (file_exists('../src/controllers/' . ucwords($url[0]) . '.php')) {
            // If exists, set as controller and then unset the value
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Require the controller
        require_once '../src/controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for second part of the url
        if (isset($url[1])) {
            // Check to see if method exists inside controller and then unset the value
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    // Check to see if the url has a value. If so, trim the trailing slash if there
    // Filter the url params and then explode the results into an array if 'post/id'
    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}