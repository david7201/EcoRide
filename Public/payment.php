<?php
error_reporting(E_ALL);

require_once '../src/DBconnect.php';
require_once 'car.php'; // Include the Car class
require_once 'verification.php'; // Include the VerificationProcessor class
require_once 'reservation.php'; // Include the Reservation class

class Payment {
    private $conn;
    private $amount;
    private $payment_date;
    private $payment_method;
    private $card_number;
    private $name_on_card;
    private $cvv;
    private $expiration_date;
    private $status;
    private $car;
    private $verification;
    private $reservation;

    public function __construct($connection) {
        $this->conn = $connection;
        $this->car = new Car(); // Create an instance of the Car class
        $this->verification = new Verification($connection);
        $this->reservation = new Reservation(); // Create an instance of the Reservation class
    }
    public function getTotalDays() {
        return $this->reservation->getTotal();
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setPaymentDate($payment_date) {
        $this->payment_date = $payment_date;
    }

    public function setPaymentMethod($payment_method) {
        $this->payment_method = $payment_method;
    }

    public function setCardNumber($card_number) {
        $this->card_number = $card_number;
    }

    public function setNameOnCard($name_on_card) {
        $this->name_on_card = $name_on_card;
    }

    public function setCVV($cvv) {
        $this->cvv = $cvv;
    }

    public function setExpirationDate($expiration_date) {
        $this->expiration_date = $expiration_date;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function insertPayment() {
        try {
            // Calculate total amount based on car rental days
            $totalAmount = $this->amount * $this->reservation->getTotal();
            
            // Insert payment data
            $sql = "INSERT INTO Payment (amount, payment_date, payment_method, card_number, name_on_card, cvv, expiration_date, status) VALUES (:amount, :payment_date, :payment_method, :card_number, :name_on_card, :cvv, :expiration_date, :status)";
            $stmt = $this->conn->prepare($sql);

            if ($stmt->execute([
                ':amount' => $totalAmount,
                ':payment_date' => $this->payment_date,
                ':payment_method' => $this->payment_method,
                ':card_number' => $this->card_number,
                ':name_on_card' => $this->name_on_card,
                ':cvv' => $this->cvv,
                ':expiration_date' => $this->expiration_date,
                ':status' => $this->status
            ])) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
            }

            $stmt->closeCursor();
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }
}