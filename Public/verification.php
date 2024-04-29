<?php
require_once('sessionactive.php');

require_once '../src/DBconnect.php';




class Verification {
    public $conn;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $passport_number;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
    }

    public function setPassportNumber($passport_number) {
        $this->passport_number = $passport_number;
    }
    public function getFirstName() {
        return $this->first_name;
    }
    
    public function getLastName() {
        return $this->last_name;
    }
    
    public function getPhoneNumber() {
        return $this->phone_number;
    }
    
    public function getPassportNumber() {
        return $this->passport_number;
    }


    
}

