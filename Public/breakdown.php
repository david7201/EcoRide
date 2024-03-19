<?php
require_once('sessionactive.php');

require_once 'Employee.php'; // Include Employee class

class BreakdownTowingProcessor {
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

            // Set parameters and execute the statement
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

            $stmt->closeCursor(); // Close cursor to release resources
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }

    // Method to aggregate data from both Employee and BreakdownTowingProcessor
    public function aggregateData($employee) {
        // Assuming $employee is an instance of Employee

        // Get employee data
        $employeeData = [
            'firstname' => $employee->getFirstName(),
            'lastname' => $employee->getLastName(),
            'age' => $employee->getAge(),
            'email' => $employee->getEmail(),
            'contactno' => $employee->getContactno(),
            'location' => $employee->getLocation()
        ];

        // Get breakdown towing data
        $breakdownTowingData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        // Aggregate data
        $aggregatedData = [
            'employee' => $employeeData,
            'breakdown_towing' => $breakdownTowingData
        ];

        return $aggregatedData;
    }
}
?>