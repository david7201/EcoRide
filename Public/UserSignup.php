<?php
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once 'Customer.php'; 
require ('header.php');

$error = "";

if (isset($_POST['submit'])) {
    require_once '../src/DBconnect.php';

    $user = new Customer($connection); 

    $user->setFirstName($_POST['firstname']);
    $user->setLastName($_POST['lastname']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setAge($_POST['age']);
    $user->setEmail($_POST['email']);
    $user->setContactNo($_POST['contactno']);
    $user->setLocation($_POST['location']);

    $result = $user->register(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['username'],
        $_POST['password'],
        $_POST['age'],
        $_POST['email'],
        $_POST['contactno'],
        $_POST['location']
    );

    if ($result === true) {
        $authenticatedUser = $user->authenticate(); 

        if ($authenticatedUser) {
            session_start(); 
            $_SESSION['UserID'] = $authenticatedUser['UserID'];
            $_SESSION['Username'] = $authenticatedUser['username'];
            $_SESSION['Active'] = true;

            header("location:index.php");
            exit();
        } else {
            $error = "Authentication failed after registration. Please try logging in manually.";
        }
    } else {
        $error = $result; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}

.error {
    color: #ff0000;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

<div class="container">
    <h2>User Registration</h2>
    <?php if(!empty($error)) { echo "<div class='error'>$error</div>"; } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="contactno">Contact Number:</label>
            <input type="text" id="contactno" name="contactno" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</div>

</body>
</html>
