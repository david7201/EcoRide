<?php

require_once '../src/DBconnect.php';
require_once 'verification.php'; 

class VerificationTest
{
    protected $verificationProcessor;
    public $connection; 

    public function testVerifySuccess()
    {
        $verification = new Verification($this->connection); // Pass $connection as argument

        $verification->setFirstName('John');
        echo "First Name: " . $verification->getFirstName() . "<br>";

        $verification->setLastName('Doe');
        echo "Last Name: " . $verification->getLastName() . "<br>";

        $verification->setPhoneNumber('123456789');
        echo "Phone Number: " . $verification->getPhoneNumber() . "<br>";

        $verification->setPassportNumber('ABC123');
        echo "Passport Number: " . $verification->getPassportNumber() . "<br>";
    }
}

$verificationTest = new VerificationTest();

$verificationTest->testVerifySuccess();
?>
