<?php
require_once('sessionactive.php');


require_once '../src/DBconnect.php';
require_once 'Reservation.php'; // Include Reservation class

// Function to cancel a reservation
function cancelReservation($connection, $reservationID) {
    try {
        // Prepare the SQL statement
        $sql = "DELETE FROM reservation WHERE ReservationID = :reservationID";
        // Prepare the statement
        $statement = $connection->prepare($sql);
        // Bind values to parameters
        $statement->bindValue(':reservationID', $reservationID);
        // Execute the statement
        $statement->execute();

        if ($statement->rowCount() > 0) {
            echo "Reservation with reservation number $reservationID has been cancelled successfully.";
        } else {
            echo "No reservation found with reservation number $reservationID.";
        }
    } catch(PDOException $error) {
        echo "Error cancelling reservation: " . $error->getMessage();
    }
}

// Process cancellation if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reservationID'])) {
    // Get reservation ID from form submission
    $reservationID = $_POST['reservationID'];
    // Call cancelReservation function
    cancelReservation($connection, $reservationID);
}

require "header.php";
?>
<h2>Cancel a Reservation</h2>
<form method="post">
    <label for="reservationID">Reservation Number</label>
    <input type="text" name="reservationID" id="reservationID">
    <button type="submit" name="submit">Cancel Reservation</button>
</form>
