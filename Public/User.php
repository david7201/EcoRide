<?php
class User {
    private $connection;
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $age;
    private $email;
    private $contactno;
    private $location;

    // Constructor to initialize the database connection
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Setter and getter methods for first name
    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstName() {
        return $this->firstname;
    }

    // Setter and getter methods for last name
    public function setLastName($lastname) {
        $this->lastname = $lastname;
    }

    public function getLastName() {
        return $this->lastname;
    }

    // Setter and getter methods for username
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    // Setter and getter methods for password
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    // Setter and getter methods for age
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    // Setter and getter methods for email
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setter and getter methods for contact number
    public function setContactNo($contactno) {
        $this->contactno = $contactno;
    }

    public function getContactNo() {
        return $this->contactno;
    }

    // Setter and getter methods for location
    public function setLocation($location) {
        $this->location = $location;
    }

    public function getLocation() {
        return $this->location;
    }


    // Method to register a new user
    public function register($firstname, $lastname, $username, $password, $age, $email, $contactno, $location) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        echo strlen($hashedPassword);

        // Prepare SQL statement with interpolated values
        $sql = "INSERT INTO User (firstName, lastName, username, password, age, email, contactno, location) 
                VALUES ('$firstname', '$lastname', '$username', '$hashedPassword', $age, '$email', '$contactno', '$location')";

        // Execute the statement
        if ($this->connection->exec($sql)) {
            return true; // Registration successful
        } else {
            return "Registration failed. Please try again later."; // Registration failed
        }
    }
}
?>
