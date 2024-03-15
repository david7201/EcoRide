<?php
require "header.php";
require "Reservation.php";

if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_reservation = array(
            "reservation" => escape($_POST['ReservationNumber']),
            "userID" => escape($_POST['UserID']),
            "carID" => escape($_POST['CarID']),
            "date" => escape($_POST['DateAndTime']),
            "total" => escape($_POST['TotalAmount']),
            "status" => escape($_POST['IdentityVerificationStatus']),
            "payment" => escape($_POST['PaymentStatus']),
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "reservation",
            implode(", ", array_keys($new_reservation)),
            ":" . implode(", :", array_keys($new_reservation))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_reservation);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submit']) && $statement) {
    echo "Reservation successfully added.";
}
?>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #E6EDEA;
    }

    form {
        background: #C5E4CB;
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
    }

    label {
        display: block;
        margin: 15px 0 5px;
    }

    input[type=text],
    input[type=submit],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border-radius: 4px;
        border: 1px solid #a9c9a4;
    }

    textarea {
        height: 100px;
    }

    input[type=submit] {
        background-color: #A9C9A4;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #97b498;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #3B5249;
        text-decoration: none;
    }

    a:hover {
        color: #2F3E34;
    }
</style>

<h2>Make a Reservation</h2>
<form method="post">
    <label for="reservation"> reservation</label>
    <input type="number" name="reservation" id="reservation">

    <label for="userID">userID</label>
    <input type="number" name="userID" id="userID">

    <label for="carID">carID</label>
    <input type="number" name="carID" id="carID">

    <label for="date">Date</label>
    <input type="date" name="date" id="date">

    <label for="total">Total</label>
    <input type="text" name="total" id="total">

    <label for="payment">Payment Status</label>
    <input type="text" name="payment" id="payment">





    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to Home</a>

<?php include "footer.php"; ?>
