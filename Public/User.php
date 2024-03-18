<?php
require_once ('../config.php'); // This is where the username and
require_once '../src/DBconnect.php';

class User {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $age;
    private $email;
    private $contactno;
    private $location;

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

            // Hash the password before storing it in the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

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
