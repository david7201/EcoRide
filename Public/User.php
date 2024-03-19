<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once ('../config.php'); 
require_once '../src/DBconnect.php';

class User {
    protected $connection;
    public $username;
    public $password;

    public function __construct($connection) {
        $this->connection = $connection;
    }
    
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }


}
?>