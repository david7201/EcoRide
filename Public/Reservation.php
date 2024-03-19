<?php
class Reservation {
    private $reservationID;
    private $userID;
    private $carID;
    private $date;
    private $total;

    // Setter methods
    public function setReservationID($reservationID) {
        $this->reservationID = $reservationID;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setCarID($carID) {
        $this->carID = $carID;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    // Getter method for reservation ID
    public function getReservationID() {
        return $this->reservationID;
    }

    // Save method to save the reservation data
    public function save($connection) {
        try {
            // Prepare the SQL statement
            $sql = "INSERT INTO reservation (ReservationID, UserID, CarID, Pickup_Date, Total_Days) VALUES (?, ?, ?, ?, ?)";
            // Prepare the statement
            $statement = $connection->prepare($sql);
            // Bind values to parameters and execute the statement
            $statement->execute([$this->reservationID, $this->userID, $this->carID, $this->date, $this->total]);
        } catch(PDOException $error) {
            // Handle any errors that occur during the execution of the query
            echo "Error saving reservation: " . $error->getMessage();
        }
    }
}
?>
