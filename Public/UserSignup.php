<?php
global $connection, $connection;
require "header.php";
require_once 'User.php';

if (isset($_POST['submit'])) {
    // Connect to the database
    require_once 'DBconnect.php';

    // Create a new User object with the database connection
    $user = new User($connection);

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $location = $_POST['location'];

    //  register the user
    $result = $user->register($firstname, $lastname, $username, $password, $age, $email, $contactno, $location);

    //  registration result
    if ($result === true) {
        // Redirect to login page after signup
        header("location: UserLogin.php");
        exit();
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <div class="navbar-logo">Ecoride Plus</div>
    <ul>
        <li><a href="Index.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="rentals.php">Rentals</a></li>
        <li><a href="adminpage.php">Admin</a></li>
    </ul>
    <button class="login-register-btn"><a href="ChooseLogin.php">Login / Register</a></button>
</nav>

<div class="container">
    <h2>User Registration</h2>
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
    <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
</div>

</body>
</html>
