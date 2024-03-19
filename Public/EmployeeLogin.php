<?php
session_start();
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Employee.php'); // Include the Employee class file
require ('header.php');


if (isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Create an instance of the Employee class
    $employee = new Employee($connection);

    // Set username using setters
    $employee->setUsername($username);

    // Retrieve employee record from the database
    $authenticatedEmployee = $employee->authenticate();

    if ($authenticatedEmployee && $authenticatedEmployee['password'] === $password) {
        session_start();
        $_SESSION['EmployeeID'] = $authenticatedEmployee['EmployeeID'];
        $_SESSION['Username'] = $authenticatedEmployee['username'];
        $_SESSION['Active'] = true;

        header("location:driverint.php");
        exit();
    } else {
        $error = "Authentication failed after registration. Please try logging in manually.";
    }

} else {
    $error = "Please try logging in again"; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Employee Sign in</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Employee sign in</h2>
        <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        <label for="inputUsername">Username</label>
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
