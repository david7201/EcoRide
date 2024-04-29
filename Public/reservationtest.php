<?php
require_once '../src/DBconnect.php';
require_once 'reservation.php'; 

class ReservationTest
{
    protected $reservation;

    public function testReservationSuccess()
    {
        $this->reservation = new Reservation();

        $this->reservation->setReservationID(1);
        echo "Reservation ID: " . $this->reservation->getReservationID() . "<br>";

        $this->reservation->setUserID(1);
        echo "User ID: " . $this->reservation->getUserID() . "<br>";

        $this->reservation->setCarID(1);
        echo "Car ID: " . $this->reservation->getCarID() . "<br>";

        $this->reservation->setDate('2024-04-28');
        echo "Date: " . $this->reservation->getDate() . "<br>";

        $this->reservation->setTotal(5);
        echo "Total Days: " . $this->reservation->getTotal() . "<br>";
    }
}

$reservationTest = new ReservationTest();

$reservationTest->testReservationSuccess();
?>
