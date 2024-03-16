<?php
global $connection;
require "header.php";
session_start();

// Include the database connection file
require_once 'DBconnect.php';

// Check if the form is submitted
if(isset($_POST['Submit'])) {
    // Get username and password from the form
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Prepare SQL statement to select user from the database
    $sql = "SELECT * FROM User WHERE username = :username AND password = :password";

    // Hash the password (if it's stored hashed in the database)
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Execute the SQL statement
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if a row is returned
    if($stmt->rowCount() == 1) {
        // User exists, set session variables and redirect
        $_SESSION['username'] = $username;
        $_SESSION['Active'] = true;
        header("location: index.php");
        exit;
    } else {
        // Invalid credentials
        $error = "Incorrect Username or Password";
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
