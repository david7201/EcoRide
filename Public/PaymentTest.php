<?php
require_once '../src/DBconnect.php';
require_once 'car.php'; 
require_once 'verification.php'; 
require_once 'reservation.php'; 
require_once 'Payment.php';

class PaymentTest
{
    protected $paymentProcessor;
    public $connection; 

    public function testInsertPaymentSuccess()
    {
        
        $car = new Car(); 
        $verification = new Verification($this->connection); 
        $reservation = new Reservation(); 

        $this->paymentProcessor = new Payment($this->connection, $car, $verification, $reservation);

        $this->paymentProcessor->setAmount(100);
        echo "Amount: " . $this->paymentProcessor->getAmount() . "<br>";

        $this->paymentProcessor->setPaymentDate('2024-04-28');
        echo "Payment Date: " . $this->paymentProcessor->getPaymentDate() . "<br>";

        $this->paymentProcessor->setPaymentMethod('Credit Card');
        echo "Payment Method: " . $this->paymentProcessor->getPaymentMethod() . "<br>";

        $this->paymentProcessor->setCardNumber('1234567890123456');
        echo "Card Number: " . $this->paymentProcessor->getCardNumber() . "<br>";

        $this->paymentProcessor->setNameOnCard('connor ball');
        echo "Name on Card: " . $this->paymentProcessor->getNameOnCard() . "<br>";

        $this->paymentProcessor->setCVV('123');
        echo "CVV: " . $this->paymentProcessor->getCVV() . "<br>";

        $this->paymentProcessor->setExpirationDate('2024-12-31');
        echo "Expiration Date: " . $this->paymentProcessor->getExpirationDate() . "<br>";

        $this->paymentProcessor->setStatus('success');
        echo "Status: " . $this->paymentProcessor->getStatus() . "<br>";
    }
}

$paymentTest = new PaymentTest();

$paymentTest->testInsertPaymentSuccess();
?>