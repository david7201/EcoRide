<?php
require_once 'breakdown.php';
require_once '../config.php';
require_once '../src/DBconnect.php';
require_once 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    $name = sanitizeInput($name);
    $email = sanitizeInput($email);
    $message = sanitizeInput($message);

    try {
        $processor = new breakdown($connection);

        $processor->setName($name);
        $processor->setEmail($email);
        $processor->setMessage($message);

        $processor->insertBreakdown();
        echo "Breakdown submitted successfully!";
    } catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}

function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakdown Form</title>
</head>
<body>
    <h2>Breakdown Form</h2>

    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
