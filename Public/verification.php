<?php
require_once '../src/DBconnect.php';

class Verification {
    private $conn;
    private $first_name;
    private $last_name;
    private $phone_number;
    private $passport_number;

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

    public function insertVerification() {
        try {
            $sql = "INSERT INTO Verification (first_name, last_name, phone_number, passport_number) VALUES (:first_name, :last_name, :phone_number, :passport_number)";
            $stmt = $this->conn->prepare($sql);

            $params = [
                ':first_name' => $this->first_name,
                ':last_name' => $this->last_name,
                ':phone_number' => $this->phone_number,
                ':passport_number' => $this->passport_number
            ];

            if ($stmt->execute($params)) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $stmt->errorInfo()[2]; // Display error message
            }

            $stmt->closeCursor();
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }
}

