<?php
require_once 'Payment.php'; // Assuming Payment class is defined in Payment.php

class PaymentTest
{
    protected $paymentProcessor;

    public function __construct()
    {
        // Mocking dependencies for testing
        $connection = null; // Mock database connection
        $car = null; // Mock Car object
        $verification = null; // Mock Verification object
        $reservation = null; // Mock Reservation object
        $this->paymentProcessor = new Payment($connection, $car, $verification, $reservation);
    }

    // Test case for successful payment insertion
    public function testInsertPaymentSuccess()
    {
        $this->paymentProcessor->setAmount(100);
        $this->paymentProcessor->setPaymentDate('2024-04-28');
        $this->paymentProcessor->setPaymentMethod('Credit Card');
        $this->paymentProcessor->setCardNumber('1234567890123456');
        $this->paymentProcessor->setNameOnCard('John Doe');
        $this->paymentProcessor->setCVV('123');
        $this->paymentProcessor->setExpirationDate('2024-12-31');
        $this->paymentProcessor->setStatus('success');

        ob_start(); // Capture echo output
        $this->paymentProcessor->insertPayment();
        $output = ob_get_clean(); // Get echo output

        // Assert that the output contains the success message
        $this->assertStringContainsString('Data inserted successfully!', $output);
    }

    // Test case for failed payment insertion (incomplete data)
    public function testInsertPaymentFailureIncompleteData()
    {
        // Set incomplete payment data
        $this->paymentProcessor->setAmount(0);
        $this->paymentProcessor->setPaymentDate('');
        $this->paymentProcessor->setPaymentMethod('');
        $this->paymentProcessor->setCardNumber('');
        $this->paymentProcessor->setNameOnCard('');
        $this->paymentProcessor->setCVV('');
        $this->paymentProcessor->setExpirationDate('');
        $this->paymentProcessor->setStatus('');

        ob_start(); // Capture echo output
        $this->paymentProcessor->insertPayment();
        $output = ob_get_clean(); // Get echo output

        // Assert that the output contains the error message
        $this->assertStringContainsString('Error', $output);
    }

    // Test case for failed payment insertion (invalid data)
    public function testInsertPaymentFailureInvalidData()
    {
        // Set invalid payment data
        $this->paymentProcessor->setAmount(-100); // Negative amount
        $this->paymentProcessor->setPaymentDate('invalid-date');
        $this->paymentProcessor->setPaymentMethod('Invalid Method');
        $this->paymentProcessor->setCardNumber('123'); // Invalid card number
        $this->paymentProcessor->setNameOnCard('123'); // Invalid name
        $this->paymentProcessor->setCVV('abc'); // Invalid CVV
        $this->paymentProcessor->setExpirationDate('2020-01-01'); // Expired card
        $this->paymentProcessor->setStatus('failure');

        ob_start(); // Capture echo output
        $this->paymentProcessor->insertPayment();
        $output = ob_get_clean(); // Get echo output

        // Assert that the output contains the error message
        $this->assertStringContainsString('Error', $output);
    }

    // Add more test cases as needed...

}
?>
