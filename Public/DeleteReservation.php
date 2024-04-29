
<?php
require_once "../src/DBconnect.php";

class ReservationProcessor {
    private $connection;
    private $reservation_number;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function setReservationNumber($reservation_number) {
        $this->reservation_number = $reservation_number;
    }

    public function deleteReservation() {
        try {
            $sql = "DELETE FROM reservation WHERE reservationID = :reservationID"; 
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':reservationID', $this->reservation_number);
            $statement->execute();

            if ($statement->rowCount() > 0) {
                echo "Reservation with ID $this->reservation_number has been deleted successfully.";
            } else {
                echo "No reservation found with ID $this->reservation_number.";
            }
        } catch(PDOException $error) {
            echo "Error deleting reservation: " . $error->getMessage();
        }
    }
}

$reservationProcessor = new ReservationProcessor($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservationProcessor->setReservationNumber($_POST['delete_reservation_id']);
    $reservationProcessor->deleteReservation();
}

require "header.php";
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
    <form action="driverint.php" method="post">
        <label for="delete_reservation_id">Reservation ID:</label>
        <input type="text" id="delete_reservation_id" name="delete_reservation_id" required>
        <button type="submit">Delete Reservation</button>
    </form>
</body>
</html>

<?php require_once "footer.php"; ?>