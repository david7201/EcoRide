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

    // Method to log in a user
    public function login($username, $password) {
        // Prepare SQL statement to fetch user by username
        $sql = "SELECT * FROM User WHERE username = :username";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch user record
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful
            return true;
        } else {
            // Invalid username or password
            return false;
        }
    }


    // Method to check if user is logged in
    public function isLoggedIn() {
        return isset($_SESSION['username']);
    }

    // Method to register a new user
    public function register($firstname, $lastname, $username, $password, $age, $email, $contactno, $location) {
        // Prepare an INSERT statement
        $sql = "INSERT INTO User (firstName, lastName, username, password, age, email, contactno, location) 
                VALUES (:firstname, :lastname, :username, :password, :age, :email, :contactno, :location)";
        $stmt = $this->connection->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':age', $age, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contactno', $contactno, PDO::PARAM_STR);
        $stmt->bindParam(':location', $location, PDO::PARAM_STR);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful
            return true;
        } else {
            // Registration failed
            return "Registration failed. Please try again later.";
        }
    }
}
?>
