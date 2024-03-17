<?php
// Start session
global $connection;
session_start();

// Include necessary files
require "header.php";
require_once 'User.php';
require_once 'DBconnect.php';

// Check if the login form is submitted
if(isset($_POST['Submit'])) {
    // Get username and password from the form
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Create a new instance of the User class with the database connection
    $user = new User($connection);

    // Call the login method of the User object
    $result = $user->login($username, $password);

    // Check the result of the login attempt
    if($result === true) {
        // User is authenticated, set session variables
        $_SESSION['username'] = $username;
        $_SESSION['Active'] = true;

        // Redirect to index.php
        header("location: index.php");
        exit;
    } else {
        // Invalid credentials
        $error = "Incorrect Username or Password";
    }
}

// Check if the user is logged in
$logged_in = isset($_SESSION['username']) && $_SESSION['Active'] === true;
?>

<!DOCTYPE html>
<html lang="en">
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

<?php if ($logged_in) { ?>
<?php } ?>

</body>
</html>
