<?php
// Include the database connection file
global $connection;
require_once 'DBconnect.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    var_dump($_POST); // Output the $_POST array for debuggings
    // Define variables and initialize with empty values
    $firstname = $lastname = $username = $password = $age = $email = $contactno = $location = "";

    // Processing form data when form is submitted
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno']; // Changed from 'Contact Number'
    $location = $_POST['location'];
    $date = date("Y-m-d"); // Current date as signup date



    // Prepare an INSERT statement
    $sql = "INSERT INTO User (firstName, lastName,username, password, age, email, contactno, location, date) 
            VALUES (:firstname, :lastname, :username, :password, :age, :email, :contactno, :location, :date)";

    if ($stmt = $connection->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":contactno", $contactno); // Changed from ':contactinfo'
        $stmt->bindParam(":location", $location);
        $stmt->bindParam(":date", $date);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to login page after successful signup
            header("location: UserLogin.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Database connection error.";
    }

    // Close statement
    unset($stmt);
}

// Close connection (if open)
if ($connection) {
    $connection = null;
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
            <input type="text" id="password" name="password" required>
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
