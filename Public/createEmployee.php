<?php
global $connection, $sql;
require "header.php";

if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "firstname" => escape($_POST['firstname']),
            "lastname" => escape($_POST['lastname']),
            "username" => escape($_POST['username']), 
            "email" => escape($_POST['email']),
            "age" => escape($_POST['age']),
            "location" => escape($_POST['location'])
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "employee",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submit']) && $statement) {
    echo escape($_POST['firstname']) . ' successfully added.';
}
?>

<style>
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #E6EDEA;
}

form {
    background: #C5E4CB;
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 8px;
}

label {
    display: block;
    margin: 15px 0 5px;
}

input[type=text],
input[type=submit] {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #a9c9a4;
}

input[type=submit] {
    background-color: #A9C9A4;
    color: white;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #97b498;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #3B5249;
    text-decoration: none;
}

a:hover {
    color: #2F3E34;
}
</style>

<h2>Add Employee</h2>
<form method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname">
    
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">
    
    <label for="username">Username</label>
    <input type="text" name="username" id="username"> 
    
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email">
    
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    
    <input type="submit" name="submit" value="Submit">
</form>

<a href="Admin.php">Back to home</a>

<?php include "footer.php"; ?>
