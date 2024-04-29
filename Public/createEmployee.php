<?php
require_once('sessionactive.php');

require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Employee.php'); 
require_once('header.php');

if (isset($_POST['submit'])) {
    try {
        $employee = new Employee($connection);
        $employee->setFirstName($_POST['firstname']);
        $employee->setLastName($_POST['lastname']);
        $employee->setUsername($_POST['username']);
        $employee->setPassword($_POST['password']); 
        $employee->setAge($_POST['age']);
        $employee->setEmail($_POST['email']);
        $employee->setContactNo($_POST['contactno']); 
        $employee->setLocation($_POST['location']);

        $employee->insertEmployee(); 

        echo ($_POST['firstname']) . ' successfully added.';
    } catch(PDOException $error) {
        echo $error->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .error {
            color: #ff0000;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #A9C9A4;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Employee</h2>
        <form method="post">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"> 
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"> 
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
            </div>
            <div class="form-group">
                <label for="contactno">Contact Number</label>
                <input type="text" name="contactno" id="contactno"> 
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
        <a href="Adminpage.php">Back to home</a>
    </div>
</body>
</html>

<?php require_once('footer.php'); ?>
