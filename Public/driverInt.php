<?php
require "header.php";

interface DriverInterface
{
    // Create a new reservation
    public function createReservation($data);

    // Read reservation details
    public function readReservation($reservationId);

    // Update reservation details
    public function updateReservation($reservationId, $data);

    // Delete reservation
    public function deleteReservation($reservationId);
}

class DatabaseDriver implements DriverInterface
{
    // Database connection
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createReservation($data)
    {
        // Implement logic to create reservation in the database
    }

    public function readReservation($reservationId)
    {
        // Implement logic to read reservation details from the database
    }

    public function updateReservation($reservationId, $data)
    {
        // Implement logic to update reservation details in the database
    }

    public function deleteReservation($reservationId)
    {
        // Implement logic to delete reservation from the database
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
</head>
<body>
<h1>Reservation Management</h1>
<h2>Create Reservation</h2>
<form action="create_reservation.php" method="post">
    <!-- Form fields to create a new reservation -->
    <label for="reservation_details">Reservation Details:</label>
    <input type="text" id="reservation_details" name="reservation_details" required>
    <button type="submit">Create Reservation</button>
</form>

<h2>Read Reservation</h2>
<form action="read_reservation.php" method="get">
    <!-- Form field to enter reservation ID for reading -->
    <label for="reservation_id">Reservation ID:</label>
    <input type="text" id="reservation_id" name="reservation_id" required>
    <button type="submit">Read Reservation</button>
</form>

<h2>Delete Reservation</h2>
<form action="delete_reservation.php" method="post">
    <!-- Form field to enter reservation ID for deletion -->
    <label for="delete_reservation_id">Reservation ID:</label>
    <input type="text" id="delete_reservation_id" name="delete_reservation_id" required>
    <button type="submit">Delete Reservation</button>
</form>
</body>
</html>
