<?php
require_once('sessionactive.php');

require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Employee.php'); // Include the Employee class file
require_once('header.php');

session_start();

if (isset($_POST['submit'])) {
    try {
        $employee = new Employee($connection);
        $employee->setFirstName($_POST['firstname']);
        $employee->setLastName($_POST['lastname']);
        $employee->setUsername($_POST['username']);
        $employee->setPassword($_POST['password']); // Set the password
        $employee->setAge($_POST['age']);
        $employee->setEmail($_POST['email']);
        $employee->setContactNo($_POST['contactno']); // Set the contact number
        $employee->setLocation($_POST['location']);

        $employee->insertEmployee(); // Method to insert employee into the database

        echo ($_POST['firstname']) . ' successfully added.';
    } catch(PDOException $error) {
        echo $error->getMessage();
    }
}
?>

<style>
/* Your CSS styles */
</style>

<h2>Add Employee</h2>
<form method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname">
    
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">
    
    <label for="username">Username</label>
    <input type="text" name="username" id="username"> 
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password"> <!-- Add password field -->
    
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email">
    
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    
    <label for="contactno">Contact Number</label>
    <input type="text" name="contactno" id="contactno"> <!-- Add contact number field -->
    
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    
    <input type="submit" name="submit" value="Submit">
</form>

<a href="Admin.php">Back to home</a>

<?php require_once('footer.php'); ?>
