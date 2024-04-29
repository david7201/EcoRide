<?php

require_once 'User.php';

class Customer extends User {
    private $firstname;
    private $lastname;
    private $age;
    private $email;
    private $contactno;
    private $location;
      

    public function __construct($connection) {
        parent::__construct($connection); 
        $this->connection = $connection; 
    }

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstName() {
        return $this->firstname;
    }
    
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
    public function getLastname() {
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
    
    public function setContactno($contactno) {
        $this->contactno = $contactno;
    }
    
    public function getContactno() {
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
            $query = "SELECT COUNT(*) FROM user WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $statement->execute([$email]);
            $count = $statement->fetchColumn();

            if ($count > 0) {
                return "Email address already exists.";
            }

            $query = "INSERT INTO user (firstname, lastname, username, password, age, email, contactno, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($query);

            $statement->execute([$firstname, $lastname, $username, $password, $age, $email, $contactno, $location]);

            return true; 
        } catch (PDOException $e) {
            return $e->getMessage(); 
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
            return null; 
        }
    }
}

?>
