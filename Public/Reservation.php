<?php
class Reservation {
    private $reservationID;
    private $userID;
    private $carID;
    private $date;
    private $total;

    

        public function setReservationID($reservationID) {
            $this->reservationID = $reservationID;
        }
    
        public function getReservationID() {
            return $this->reservationID;
        }
    
        public function setUserID($userID) {
            $this->userID = $userID;
        }
    
        public function getUserID() {
            return $this->userID;
        }
    
        public function setCarID($carID) {
            $this->carID = $carID;
        }
    
        public function getCarID() {
            return $this->carID; 
        }
    
        public function setDate($date) {
            $this->date = $date;
        }
    
        public function getDate() {
            return $this->date;
        }
    
        public function setTotal($total) {
            $this->total = $total;
        }
    
        public function getTotal() {
            return $this->total;
        }
    
    




    
}
?>
