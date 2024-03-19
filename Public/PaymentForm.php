<?php
require_once('sessionactive.php');

require_once 'payment.php';
require_once 'header.php';

$paymentProcessor = new Payment($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $paymentProcessor->setPaymentDate($_POST["payment_date"]);
    $paymentProcessor->setPaymentMethod($_POST["payment_method"]);
    $paymentProcessor->setCardNumber($_POST["card_number"]);
    $paymentProcessor->setNameOnCard($_POST["name_on_card"]);
    $paymentProcessor->setCVV($_POST["cvv"]);
    $paymentProcessor->setExpirationDate($_POST["expiration_date"]);
    $paymentProcessor->setStatus("successful");

    $paymentProcessor->insertPayment();

        header("Location: Index.php");
        exit();
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <h2>Payment Form</h2>
    <form id="paymentForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Prompt user to enter the number of days -->
        <label for="reservation_days">Enter Number of Days for Reservation:</label><br>
        <input type="number" id="reservation_days" name="reservation_days" required oninput="updateTotalAmount()"><br>

        <!-- Display the calculated total amount -->
        <label for="total_amount">Total Amount:</label><br>
        <input type="text" id="total_amount" name="total_amount" value="0" readonly><br>

        <!-- Rest of the form fields -->
        <label for="payment_date">Payment Date:</label><br>
        <input type="date" id="payment_date" name="payment_date" required><br>

        <label for="payment_method">Payment Method:</label><br>
        <select id="payment_method" name="payment_method" required>
            <option value="">Select Payment Method</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <!-- Add more options for payment methods if needed -->
        </select><br>

        <label for="card_number">Card Number:</label><br>
        <input type="text" id="card_number" name="card_number" required><br>

        <label for="name_on_card">Name on Card:</label><br>
        <input type="text" id="name_on_card" name="name_on_card" required><br>

        <label for="cvv">CVV:</label><br>
        <input type="text" id="cvv" name="cvv" required><br>

        <label for="expiration_date">Expiration Date:</label><br>
        <input type="date" id="expiration_date" name="expiration_date" required><br>

        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status" value="successful" readonly><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        function updateTotalAmount() {
            // Retrieve the number of days for reservation from the input field
            var reservationDays = document.getElementById("reservation_days").value;
            
            // Calculate the total amount based on the rate per day (80) and the number of days
            var totalAmount = 80 * reservationDays;
            
            // Update the value of the total amount input field
            document.getElementById("total_amount").value = totalAmount;
        }
    </script>
</body>
</html>
