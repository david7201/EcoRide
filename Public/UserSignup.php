<?php

global $connection;
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('User.php');
require_once "Customer.php";
require ('header.php');

$error = "";

if (isset($_POST['submit'])) {
    // Validate form data
    $errors = validateFormData($_POST);

    if (empty($errors)) {
        // Include the database connection file
        require_once '../src/DBconnect.php';

        // Instantiate the 'customer' class
        $customer = new customer($connection);

        // Set form data to the customer object
        $customer->setFirstName($_POST['firstname']);
        $customer->setLastName($_POST['lastname']);
        $customer->setUsername($_POST['username']);
        $customer->setPassword($_POST['password']);
        $customer->setAge($_POST['age']);
        $customer->setEmail($_POST['email']);
        $customer->setContactNo($_POST['contactno']);
        $customer->setLocation($_POST['location']);
        $customer->setDOB($_POST['DOB']);

        // Attempt to register the user
        $result = registerUser($customer);

        // Check registration result
        if ($result === true) {
            // Attempt to authenticate the user after registration
            $authenticatedUser = authenticateUser($customer);

            if ($authenticatedUser) {
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
    } else {
        // Concatenate errors into a single message
        $error = implode("<br>", $errors);
    }
}

// Function to validate form data
function validateFormData($data) {
    $errors = [];

    // Perform validation for each form field
    if (empty($data['firstname'])) {
        $errors[] = "First name is required.";
    }

    if (empty($data['lastname'])) {
        $errors[] = "Last name is required.";
    }

    // Add validation for other fields as needed

    return $errors;
}

// Function to register a user
function registerUser($customer) {
    try {
        // Check if the email already exists in the database
        $query = "SELECT COUNT(*) FROM user WHERE email = ?";
        $statement = $customer->getConnection()->prepare($query);
        $statement->execute([$customer->getEmail()]);
        $count = $statement->fetchColumn();

        if ($count > 0) {
            // Redirect the user to the login page upon successful registration
            header("location: login.php"); // Replace 'login.php' with the actual login page URL
            exit();
        }

        // Prepare the SQL statement for user registration
        $query = "INSERT INTO user (firstname, lastname, username, password, age, email, contactno, location, DOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $customer->getConnection()->prepare($query);

        // Hash the password
        $hashedPassword = password_hash($customer->getPassword(), PASSWORD_DEFAULT);

        // Execute the statement with the provided values
        $statement->execute([$customer->getFirstName(), $customer->getLastName(), $customer->getUsername(), $hashedPassword, $customer->getAge(), $customer->getEmail(), $customer->getContactNo(), $customer->getLocation(), $customer->getDOB()]);

        return true; // Return true on successful registration
    } catch (PDOException $e) {
        return $e->getMessage(); // Return error message if an exception occurs
    }
}

// Function to authenticate a user
function authenticateUser($customer) {
    try {
        // Query the database to retrieve user information
        $query = "SELECT * FROM user WHERE username = ?";
        $statement = $customer->getConnection()->prepare($query);
        $statement->execute([$customer->getUsername()]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        // Verify if the user exists and the password matches
        if ($user && password_verify($customer->getPassword(), $user['password'])) {
            return $user; // Authentication successful
        } else {
            return false; // Authentication failed
        }
    } catch (PDOException $e) {
        // Handle database connection or query errors
        // Log or return an error message
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

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
        <div class="form-group">
            <label for="DOB">D.O.B.:</label>
            <input type="date" id="DOB" name="DOB" required>
        </div>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</div>

</body>
</html>

