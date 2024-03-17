<?php
require "header.php";
require_once 'DBconnect.php';


// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $welcome_message = "Welcome, $username";
    session_start();

} else {
    $welcome_message = null;
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
<header class="hero">
    <div class="hero-text">
        <h1>Welcome to Ecoride Plus</h1>
        <p>Eco-friendly transport and motion services. We offer the best in class services for you and the environment.</p>
    </div>
</header>

<div class="main-content">
    <aside class="sidebar">
        <h3>About Us</h3>
        <p>Learn more about our mission and services.</p>
    </aside>
    <section class="main-section">
        <h2>Our Services</h2>
        <p>Explore the various eco-friendly services we provide.</p>
    </section>
</div>


</body>
</html>
