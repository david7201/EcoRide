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

    // Getter methods
    public function getReservationID() {
        return $this->reservationID; 
    }

    public function getUserID() {
        return $this->userID;
    }

    public function getCarID() {
        return $this->carID;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTotal() {
        return $this->total;
    }

    public function save($connection) {
        try {
            $sql = "INSERT INTO reservation (ReservationID, UserID, CarID, Pickup_Date, Total_Days) VALUES (?, ?, ?, ?, ?)";
            $statement = $connection->prepare($sql);
            $statement->execute([$this->reservationID, $this->userID, $this->carID, $this->date, $this->total]);
        } catch(PDOException $error) {
            echo "Error saving reservation: " . $error->getMessage();
        }
    }
}
?>
