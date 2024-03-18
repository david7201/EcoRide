<?php
global $connection;
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('User.php');
require_once "Customer.php";
require ('header.php');

if (isset($_POST['submit'])) {
    // Include the database connection file
    require_once '../src/DBconnect.php';

    // Create a new User object with the database connection
    //$user = new User($connection);
    // Instantiate the 'customer' class
    $customer = new customer($connection);

    // Get form data and set it to the user object
    $customer->setFirstName($_POST['firstname']);
    $customer->setLastName($_POST['lastname']);
    $customer->setUsername($_POST['username']);
    $customer->setPassword($_POST['password']);
    $customer->setAge($_POST['age']);
    $customer->setEmail($_POST['email']);
    $customer->setContactNo($_POST['contactno']);
    $customer->setLocation($_POST['location']);

    // Attempt to register the user and pass the form data as arguments
    $result = $customer->register(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['username'],
        $_POST['password'],
        $_POST['age'],
        $_POST['email'],
        $_POST['contactno'],
        $_POST['location']
    );

    // Check registration result
    if ($result === true) {
        // Attempt to authenticate the user after registration
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
    } else {
        $error = $result; 
    }
}
?>




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