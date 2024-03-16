<?php
// User class definition
global $connection;
require "header.php";

class User {
    private $connection;

    // Constructor to initialize the database connection
    public function __construct($connection) {
        $this->connection = $connection;
    }


    // Method to log in a user
    public function login($username, $password) {
        // Prepare and execute SQL statement to retrieve user from database
        // (code for database operations)

        // Check if user exists and password matches
        // (code for authentication)
    }
}

// Usage example
require_once 'DBconnect.php'; // Assuming DB connection is established here

// Create User object
$user = new User($connection);

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Process form data and call signup or login method based on action
    // (code for form processing)
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>
</div>
</body>
</html>
