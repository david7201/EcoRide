<?php
require_once('sessionactive.php');
require_once "header.php";
require_once "Reservation.php";

class addreservation extends Reservation {
    public function makeReservation($connection) {
        try {
            $sql = "INSERT INTO reservation (ReservationID, CarID, Pickup_Date, Total_Days) VALUES (?, ?, ?, ?)";
            $statement = $connection->prepare($sql);
            $statement->execute([$this->getReservationID(), $this->getCarID(), $this->getDate(), $this->getTotal()]);

            echo "Reservation made successfully!";
        } catch(PDOException $error) {
            echo "Error saving reservation: " . $error->getMessage();
        }
    }
}
/*
function testReservationSystem($carID, $date, $totalDays)
{
    if (!is_numeric($carID) || $carID < 1 || $carID > 9999) {
        return "Invalid Car ID";
    }

    if (empty($date) || strtotime($date) < strtotime(date("Y-m-d")) || strtotime($date) >= strtotime(date("Y-m-d") . " +1 day")) {
        return "Invalid Date";
    }

    if (!is_numeric($totalDays) || $totalDays < 1 || $totalDays > 30) {
        return "Invalid Total Days";
    }

    return "Valid Reservation";
}
$test1 = testReservationSystem(1, date("Y-m-d"), 1);

$test2 = testReservationSystem(9999, date("Y-m-d", strtotime(date("Y-m-d") . " +1 day")), 30);

$test3 = testReservationSystem(0, date("Y-m-d"), 1);

$test4 = testReservationSystem(10000, date("Y-m-d", strtotime(date("Y-m-d") . " +1 day")), 30);

$test5 = testReservationSystem(1, date("Y-m-d", strtotime(date("Y-m-d") . " -1 day")), 1);

$test6 = testReservationSystem(9999, date("Y-m-d"), 30);

$test7 = testReservationSystem(1, date("Y-m-d"), 30);

$test8 = testReservationSystem(9999, date("Y-m-d"), 1);


*/

$carID = isset($_SESSION['carID']) ? $_SESSION['carID'] : '';


if (isset($_POST['submit'])) {
    require_once "../src/DBconnect.php";
    $carID = $_POST['carID'];
    $date = $_POST['date'];
    $total = $_POST['total'];

    if (empty($carID) || empty($date) || empty($total)) {
        echo "Please fill out all fields";
        exit();
    }

    if (!is_numeric($total) || $total <= 0) {
        echo "Total days must be a positive number";
        exit();
    }

    $sql = "SELECT COUNT(*) FROM car WHERE CarID = ?";
        $statement = $connection->prepare($sql);
        $statement->execute([$carID]);
        $rowCount = $statement->fetchColumn();

        if ($rowCount == 0) {
            echo  "Car ID does not exist in the database";
        } else {

    try {
        $reservation = new addreservation();
        $reservation->setCarID($carID);
        $reservation->setDate($date);
        $reservation->setTotal($total);

        $reservation->makeReservation($connection);

        header("Location: verificationpage.php");
        exit();
    } catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Reservation</title>
    <style>
    </style>
</head>
<body>
    <h2>Make a Reservation</h2>
    <form method="post">
    <label for="carID">Car ID:</label>
    <input type="number" name="carID" id="carID" value="<?php echo $carID; ?>" required>
        
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        
        <label for="total">Total Days:</label>
        <input type="number" name="total" id="total" required>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    

    <?php 


    // echo "<h3>Test Results</h3>";
    // echo "<ol>";
    // echo "<li>Test Case 1: $test1</li>";
    // echo "<li>Test Case 2: $test2</li>";
    // echo "<li>Test Case 3: $test3</li>";
    // echo "<li>Test Case 4: $test4</li>";
    // echo "<li>Test Case 5: $test5</li>";
    // echo "<li>Test Case 6: $test6</li>";
    // echo "<li>Test Case 7: $test7</li>";
    // echo "<li>Test Case 8: $test8</li>";
    // echo "</ol>";
    // ?>
    <?php  include "footer.php"; ?>


    
</body>
</html>
