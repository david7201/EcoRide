<?php 
require_once '../src/DBconnect.php';
require_once '../config.php';

class Breakdown {
    private $conn;
    private $employee;
    private $breakdown;
    private $name;
    private $email;
    private $message;

    public function __construct($connection, $employee) {
        $this->conn = $connection;
        $this->employee = $employee;
        $this->breakdown = $breakdown;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function getMessage() {
        return $this->message;
    }

    public function insertBreakdown() {
        try {
            $sql = "INSERT INTO breakdowntowing (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $this->conn->prepare($sql);

            $params = [
                ':name' => $this->name,
                ':email' => $this->email,
                ':message' => $this->message
            ];

            if ($stmt->execute($params)) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
            }

            $stmt->closeCursor(); 
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }

    public function aggregateData() {
        $employeeData = [
            'firstname' => $this->employee->getFirstName(),
            'lastname' => $this->employee->getLastName(),
            'age' => $this->employee->getAge(),
            'email' => $this->employee->getEmail(),
            'contactno' => $this->employee->getContactno(),
            'location' => $this->employee->getLocation()
        ];

        $breakdownTowingData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        $aggregatedData = [
            'employee' => $employeeData,
            'breakdown_towing' => $breakdownTowingData
        ];

        return $aggregatedData;
    }
}
