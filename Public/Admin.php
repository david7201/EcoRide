<?php



require_once ('../config.php');
require_once '../src/DBconnect.php';
require_once('User.php');

class Admin extends User {
    protected $connection;

    public function __construct($connection) {
        parent::__construct($connection); // Call parent constructor
        $this->connection = $connection;
    }
    
    public function authenticate() {
        try {
            $query = "SELECT * FROM administrator WHERE Username = ?";
            $statement = $this->connection->prepare($query);
            $statement->execute([$this->username]);
            $admin = $statement->fetch(PDO::FETCH_ASSOC);
            
            // Verify if the admin exists and the password matches
            if ($admin && password_verify($this->password, $admin['Password'])) {
                return $admin;
            } else {
                return null; // Invalid username or password
            }
        } catch (PDOException $e) {
            return null; // Return null if an exception occurs
        }
    }
    
    
    
}
?>