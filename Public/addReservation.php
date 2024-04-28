<?php
require_once('sessionactive.php');

require_once "header.php";
require_once "Reservation.php";

if (isset($_POST['submit'])) {
    require_once "../src/DBconnect.php";
    
    try {
        $reservation = new Reservation();
        $reservation->setCarID($_POST['carID']); // Set Car ID from user input
        $reservation->setDate($_POST['date']);
        $reservation->setTotal($_POST['total']);
        
        // Save reservation
        $reservation->save($connection);

        // Redirect to verification page
        header("Location: verificationpage.php");
        exit();
    } catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Reservation</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <h2>Make a Reservation</h2>
    <form method="post">
        <!-- Car ID input field -->
        <label for="carID">Car ID:</label>
        <input type="text" name="carID" id="carID" required>
        
        <!-- Other reservation fields -->
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        
        <label for="total">Total Days:</label>
        <input type="number" name="total" id="total" required>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php include "footer.php"; ?>
</body>
</html>
