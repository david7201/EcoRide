<?php
require "header.php";
require_once 'DBconnect.php';

session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $welcome_message = "Welcome, $username";
} else {
    $welcome_message = "Welcome!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simple Database App</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        /* Your CSS styles here */
    </style>
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
    <!-- Display welcome message -->
    <h4><?php echo $welcome_message; ?></h4>
    <?php if (isset($_SESSION['username'])) { ?>
        <!-- User is logged in -->
        <!-- Add user-specific content here -->
        <button onclick="location.href='logout.php'">Logout</button>
    <?php } else { ?>
        <!-- User is not logged in -->
        <!-- Add content for non-logged-in users here -->
        <button onclick="location.href='login.php'">Login</button>
        <button onclick="location.href='signup.php'">Sign Up</button>
    <?php } ?>
</nav>

<!-- Your HTML content here -->

</body>
</html>
