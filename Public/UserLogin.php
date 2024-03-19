<?php
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Customer.php'); 
require ('header.php');




if (isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $customer = new Customer($connection);

    $customer->setUsername($username);

    $authenticatedUser = $customer->authenticate();

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
    
}
else {
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
    <title>Sign in</title>

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

.form-signin {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-signin h2 {
    margin-bottom: 20px;
    text-align: center;
}

.form-signin label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.checkbox {
    margin-bottom: 20px;
}

.checkbox label {
    font-weight: normal;
}

.button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.button:hover {
    background-color: #0056b3;
}

.error {
    color: #ff0000;
    margin-bottom: 20px;
}

    </style>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
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
