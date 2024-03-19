<?php

class Reservation {
    private $userID;
    private $carID;
    private $date;
    private $total;

    // Setter methods
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
    public function getTotal() {
      return $this->total;
  }
    // Save method to save the reservation data
    public function save($connection) {
      // Prepare the SQL statement
      $sql = "INSERT INTO reservation (CarID, Pickup_Date, Total_Days) VALUES (?, ?, ?)";
      
      // Prepare the statement
      $statement = $connection->prepare($sql);
      
      // Bind values to parameters and execute the statement
      $statement->execute([$this->carID, $this->date, $this->total]);
  }
  
}

?>
