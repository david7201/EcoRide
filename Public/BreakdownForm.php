<?php
require_once 'breakdown.php';
require_once '../config.php';
require_once '../src/DBconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $processor = new breakdown($connection);

    $processor->setName($name);
    $processor->setEmail($email);
    $processor->setMessage($message);

    $processor->insertBreakdown();
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
