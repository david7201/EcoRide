<?php
//require_once('sessionactive.php');
require_once '../src/DBconnect.php';
require_once 'car.php'; 
require_once 'verification.php'; 
require_once 'reservation.php'; 

class Payment {
    private $conn;
    public $amount;
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

    public function __construct($connection, $car, $verification, $reservation) {
        $this->conn = $connection;
        $this->car = $car; 
        $this->verification = $verification;
        $this->reservation = $reservation; 
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

    // Getter methods
    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentDate() {
        return $this->payment_date;
    }

    public function getPaymentMethod() {
        return $this->payment_method;
    }

    public function getCardNumber() {
        return $this->card_number;
    }

    public function getNameOnCard() {
        return $this->name_on_card;
    }

    public function getCVV() {
        return $this->cvv;
    }

    public function getExpirationDate() {
        return $this->expiration_date;
    }

    public function getStatus() {
        return $this->status;
    }

    

    public function getConnection() {
        return $this->conn;
    }

    // public function insertPayment() {
    //     try {
    //         $totalAmount = $this->amount * $this->reservation->getTotal();
            
    //         $sql = "INSERT INTO Payment (amount, payment_date, payment_method, card_number, name_on_card, cvv, expiration_date, status) VALUES (:amount, :payment_date, :payment_method, :card_number, :name_on_card, :cvv, :expiration_date, :status)";
    //         $stmt = $this->conn->prepare($sql);

    //         if ($stmt->execute([
    //             ':amount' => $totalAmount,
    //             ':payment_date' => $this->payment_date,
    //             ':payment_method' => $this->payment_method,
    //             ':card_number' => $this->card_number,
    //             ':name_on_card' => $this->name_on_card,
    //             ':cvv' => $this->cvv,
    //             ':expiration_date' => $this->expiration_date,
    //             ':status' => $this->status
    //         ])) {
    //             echo "Data inserted successfully!";
    //         } else {
    //             echo "Error: " . $sql . "<br>" . $this->conn->error;
    //         }

    //         $stmt->closeCursor();
    //     } catch (PDOException $error) {
    //         echo "Error inserting data: " . $error->getMessage();
    //     }
    // }
}
?>
