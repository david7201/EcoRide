<?php
require_once 'payment.php';
require_once 'header.php';

class PaymentForm extends Payment {
    public $connection; 
    public $amount;
    public $payment_date;
    public $payment_method;
    public $card_number;
    public $name_on_card;
    public $cvv;
    public $expiration_date;
    public $status;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function insertPayment() {
        try {
            
            $totalAmount = 80 * $this->amount;

            $sql = "INSERT INTO Payment (amount, payment_date, payment_method, card_number, name_on_card, cvv, expiration_date, status) VALUES (:amount, :payment_date, :payment_method, :card_number, :name_on_card, :cvv, :expiration_date, :status)";
            $stmt = $this->connection->prepare($sql);

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
                echo "Error: " . $sql . "<br>" . $this->connection->error;
            }

            $stmt->closeCursor();
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }
}

// Assuming $connection is defined elsewhere
$paymentForm = new PaymentForm($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set payment details from POST data
    $paymentForm->amount = $_POST["reservation_days"];
    $paymentForm->payment_date = $_POST["payment_date"];
    $paymentForm->payment_method = $_POST["payment_method"];
    $paymentForm->card_number = $_POST["card_number"];
    $paymentForm->name_on_card = $_POST["name_on_card"];
    $paymentForm->cvv = $_POST["cvv"];
    $paymentForm->expiration_date = $_POST["expiration_date"];
    $paymentForm->status = "successful";

    // Insert payment
    $paymentForm->insertPayment();

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
    <label for="reservation_days">Enter Number of Days for Reservation:</label>
        <input type="number" id="reservation_days" name="reservation_days" required oninput="updateTotalAmount()"><br>


        <label for="payment_date">Payment Date:</label><br>
        <input type="date" id="payment_date" name="payment_date" required><br>

        <label for="payment_method">Payment Method:</label><br>
        <select id="payment_method" name="payment_method" required>
            <option value="">Select Payment Method</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
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
            var reservationDays = document.getElementById("reservation_days").value;
            var totalAmount = 80 * reservationDays;
            document.getElementById("total_amount").value = totalAmount;
        }
    </script>
</body>
</html>
