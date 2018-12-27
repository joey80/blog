<?php

/**
* Database.php - PDO Database Class
*
* Author - Joey Leger (2018)
* Description - Connects to db, prepares statements and binds values
* 
*/

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    public function __construct() {

        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO Instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}