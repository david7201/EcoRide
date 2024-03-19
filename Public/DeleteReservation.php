<?php
require_once "header.php";
require_once "Reservation.php"; // Assuming Reservation.php contains the Reservation class definition
require_once "../src/DBconnect.php"; // Assuming DatabaseDriver.php contains the database operations

// Assuming $connection is your database connection
$databaseDriver = new reservation($connection);

// Check if reservation ID is provided via POST request
if(isset($_POST['delete_reservation_id'])) {
    $reservationId = $_POST['delete_reservation_id'];

    // Create an instance of the Reservation class
    $reservation = new Reservation();
    $reservation->setId($reservationId);

    // Call the deleteReservation method from the DatabaseDriver class
    $databaseDriver->deleteReservation($reservation);

    // Provide feedback to the user
    echo "Reservation with ID $reservationId deleted successfully.";
} else {
    echo "Reservation ID not provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Reservation</title>
</head>
<body>
<h2>Delete Reservation</h2>
<form action="deletereservation.php" method="post">
    <label for="delete_reservation_id">Reservation ID:</label>
    <input type="text" id="delete_reservation_id" name="delete_reservation_id" required>
    <button type="submit">Delete Reservation</button>
</form>
</body>
</html>

<?php require_once "footer.php"; ?>
