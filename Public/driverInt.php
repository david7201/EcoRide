<?php

global $connection;

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

// Usage example:
$databaseDriver = new DatabaseDriver($connection);
$reservationId = 123; // Example reservation ID

// Read reservation details
$reservationDetails = $databaseDriver->readReservation($reservationId);

// Delete reservation
$databaseDriver->deleteReservation($reservationId);

?>
