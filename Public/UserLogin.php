<?php
global $connection;
session_start();

// Include the User class definition
require_once 'User.php';

// Include the database connection file
require_once 'DBconnect.php';

// Create User object
$user = new User($connection);

// Check if the form is submitted
if(isset($_POST['Submit'])) {
    // Get username and password from the form
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Call the login method of the User object
    $result = $user->login($username, $password);

    // Check the result of the login attempt
    if($result === true) {
        // User is authenticated, set session variables and redirect to index.php
        $_SESSION['username'] = $username;
        $_SESSION['Active'] = true;
        header("location: index.php"); // Redirect to index.php
        exit;
    } else {
        // Invalid credentials
        $error = "Incorrect Username or Password";
    }
}

// Check if the user is logged in
$logged_in = $user->isLoggedIn();
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

<?php if ($logged_in) { ?>
    <!-- User is logged in -->
    <!-- Add user-specific content here -->
    <nav class="navbar">
        <div class="navbar-logo">Ecoride Plus</div>
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="rentals.php">Rentals</a></li>
            <li><a href="adminpage.php">Admin</a></li>
        </ul>
        <!-- Display welcome message -->
        <h4>Welcome, <?php echo $_SESSION['username']; ?></h4>
        <!-- Logout button -->
        <form action="logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </nav>
<?php } ?>
</body>
</html>
