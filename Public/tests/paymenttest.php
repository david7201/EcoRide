<?php

// Import the function being tested
require_once '../payment.php';

// Detect and import test framework based on shared context
//require_once 'vendor/autoload.php'; 
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase {

  public function testCalculateTotal() {
    $amount = 10;
    $taxRate = 0.05;
    $expectedTotal = 10 * (1 + 0.05);

    $total = calculateTotal($amount, $taxRate);

    $this->assertEquals($expectedTotal, $total);
  }

  public function testCalculateTotalWithNoTax() {
    $amount = 10;
    $taxRate = 0;
    $expectedTotal = 10;

    $total = calculateTotal($amount, $taxRate);

    $this->assertEquals($expectedTotal, $total); 
  }

  public function testCalculateTotalWithNegativeAmount() {
    $amount = -10;
    $taxRate = 0.05;

    $this->expectException(InvalidArgumentException::class);
    
    calculateTotal($amount, $taxRate);
  }

}
