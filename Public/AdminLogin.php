<?php
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Admin.php'); // Include the Admin class file

session_start();

if(isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Create an instance of the Admin class
    $admin = new Admin($connection);

    // Set username and password using setters
    $admin->setUsername($username);
    $admin->setPassword($password);

    // Debugging: Inspect username and password
    var_dump($admin->getUsername(), $admin->getPassword());

    // Authenticate the administrator
    $authenticatedAdmin = $admin->authenticate();

    // Debugging: Inspect authentication result
    $stmt = $connection->prepare("SELECT * FROM administrator WHERE username = ?");
    $stmt->execute([$admin->getUsername()]);
    $authenticatedAdmin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify if the administrator exists and the password matches
    if ($authenticatedAdmin) {
        $_SESSION['AdminID'] = $authenticatedAdmin['AdminID'];
        $_SESSION['Username'] = $authenticatedAdmin['Username'];
        $_SESSION['Active'] = true;

        header("location:AdminPage.php");
        exit;
    } else {
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
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Sign in</title>
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