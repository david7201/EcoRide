<?php
require_once('sessionactive.php');

require_once 'verification.php'; 
require "header.php";
$verificationProcessor = new verification($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verificationProcessor->setFirstName($_POST["first_name"]);
    $verificationProcessor->setLastName($_POST["last_name"]);
    $verificationProcessor->setPhoneNumber($_POST["phone_number"]);
    $verificationProcessor->setPassportNumber($_POST["passport_number"]);

    $verificationProcessor->insertVerification();
    header("Location: paymentform.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Form</title>
</head>
<body>
    <h2>Verification Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number"><br>

        <label for="passport_number">Passport Number:</label><br>
        <input type="text" id="passport_number" name="passport_number"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>