<?php
require_once '../src/DBconnect.php';
require_once ('../config.php');

class breakdown {
    private $conn;
    private $name;
    private $email;
    private $message;

    public function __construct($connection) {
        $this->conn = $connection;
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

    public function aggregateData($employee) {

        $employeeData = [
            'firstname' => $employee->getFirstName(),
            'lastname' => $employee->getLastName(),
            'age' => $employee->getAge(),
            'email' => $employee->getEmail(),
            'contactno' => $employee->getContactno(),
            'location' => $employee->getLocation()
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
?>
