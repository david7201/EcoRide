<?php
require_once('sessionactive.php');


require_once '../src/DBconnect.php';
require_once 'Reservation.php'; 

function cancelReservation($connection, $reservationID) {
    try {
        $sql = "DELETE FROM reservation WHERE ReservationID = :reservationID";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':reservationID', $reservationID);
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reservationID'])) {
    $reservationID = $_POST['reservationID'];
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

<p style="font-size: 12px; color: #888; margin-top: 20px;">Please note that cancelled reservations cannot be recovered.</p>
<?php require_once "footer.php"; ?>