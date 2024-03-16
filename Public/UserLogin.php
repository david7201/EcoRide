<?php
global $connection;
session_start();
require "header.php";

require_once ('../config.php'); // Include database configuration
require_once 'DBconnect.php';

// Check if the database connection is successful
if (!$connection) {
    echo "Database connection failed.";
    exit;
}

// Check if the login form has been submitted
if(isset($_POST['Submit'])){
    // Get username and password from the form
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['Password'];

    // Retrieve user credentials from the database
    // Assuming you have a table named 'users' with columns 'username' and 'password'
    // You need to modify this query according to your database schema
    $query = "SELECT * FROM user WHERE username = :username";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':username', $enteredUsername);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify if the user exists and the password is correct
    if($user && password_verify($enteredPassword, $user['password'])) {
        // Set session variables
        $_SESSION['username'] = $user['username'];
        $_SESSION['Active'] = true;

        // Redirect to the user profile page
        header("location: index.php");
        exit;
    } else {
        echo 'Incorrect Username or Password';
    }
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
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username">Username</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="Password">Password</label>
        <input name="Password" type="password" id="Password" class="form-control" placeholder="Password" required>
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
