<?php
require_once 'User.php';

class customer extends user {
    private $firstname;
    private $lastname;
    private $age;
    private $email;
    private $contactno;
    private $location;
    private $DOB;



    // Other methods remain unchanged...

    public function register($firstname, $lastname, $username, $password, $age, $email, $contactno, $location, $DOB) {
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
            $query = "INSERT INTO user (firstname, lastname, username, password, age, email, contactno, location, DOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
            $statement = $this->connection->prepare($query);

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Execute the statement with the provided values
            $statement->execute([$firstname, $lastname, $username, $hashedPassword, $age, $email, $contactno, $location, $DOB]);

            return true; // Return true on successful registration
        } catch (PDOException $e) {
            return $e->getMessage(); // Return error message if an exception occurs
        }
    }

    // Other methods remain unchanged...
    public function setFirstName($firstname)
    {
    }

    public function setLastName($lastname)
    {
    }

    public function setAge($age)
    {
    }

    public function setEmail($email)
    {
    }

    public function setContactNo($contactno)
    {
    }

    public function setLocation($location)
    {
    }


    public function getDOB()
    {
        return $this->DOB;
    }


    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }



}
?>
