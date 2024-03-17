<?php
require_once 'User.php';
class customer extends user {
    private $firstname;
    private $lastname;
    private $age;
    private $email;
    private $contactno;
    private $location;

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstName() {
        return $this->firstname;
    }

    public function setLastName($lastname) {
        $this->lastname = $lastname;
    }

    public function getLastName() {
        return $this->lastname;
    }

    

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setContactNo($contactno) {
        $this->contactno = $contactno;
    }

    public function getContactNo() {
        return $this->contactno;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getLocation() {
        return $this->location;
    }

    public function register($firstname, $lastname, $username, $password, $age, $email, $contactno, $location) {
        try {
            // Check if the email already exists in the database
            $query = "SELECT COUNT(*) FROM user WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $statement->execute([$email]);
            $count = $statement->fetchColumn();
    
            if ($count > 0) {
                return "Email address already exists.";
            }
    
            
    
            // Prepare the SQL statement for user registration
            $query = "INSERT INTO user (firstname, lastname, username, password, age, email, contactno, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($query);
    
            // Execute the statement with the provided values
            $statement->execute([$firstname, $lastname, $username, $hashedPassword, $age, $email, $contactno, $location]);
    
            return true; // Return true on successful registration
        } catch (PDOException $e) {
            return $e->getMessage(); // Return error message if an exception occurs
        }
    }

    public function authenticate() {
        try {
            $query = "SELECT * FROM user WHERE username = ?";
            $statement = $this->connection->prepare($query);
            $statement->execute([$this->username]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            return null; // Return null if an exception occurs
        }
    }
}
?>