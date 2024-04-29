<?php
require_once('sessionactive.php');

require 'verification.php'; 
require "header.php";

class verificationform extends verification {

   

    public function insertVerification() {
        try {
            $sql = "INSERT INTO Verification (first_name, last_name, phone_number, passport_number) VALUES (:first_name, :last_name, :phone_number, :passport_number)";
            $stmt = $this->conn->prepare($sql);

            $params = [
                ':first_name' => $this->first_name,
                ':last_name' => $this->last_name,
                ':phone_number' => $this->phone_number,
                ':passport_number' => $this->passport_number
            ];

            if ($stmt->execute($params)) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $stmt->errorInfo()[2]; 
            }

            $stmt->closeCursor();
        } catch (PDOException $error) {
            echo "Error inserting data: " . $error->getMessage();
        }
    }
}





$verificationProcessor = new Verification($connection);


$verificationForm = new verificationform($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set properties directly
    $verificationForm->first_name = $_POST["first_name"];
    $verificationForm->last_name = $_POST["last_name"];
    $verificationForm->phone_number = $_POST["phone_number"];
    $verificationForm->passport_number = $_POST["passport_number"];

    $verificationForm->insertVerification(); 
    header("Location: paymentform.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Form</title>
</head>
<body>
    <h2>Verification Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number"><br>

        <label for="passport_number">Passport Number:</label><br>
        <input type="text" id="passport_number" name="passport_number"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

    