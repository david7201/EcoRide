<?php
require_once 'sessionactive.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reservations</title>
    <style>
        .container {
            max-width: 50%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 10px;
        }

        .reservation {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
        }

        .reservation h3 {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .reservation img {
            width: 100%;
            max-width: 80px;
            height: auto;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
require "../common.php";
require_once '../src/DBconnect.php';
require_once 'reservation.php'; 

try {
    $sql = "SELECT * FROM reservation";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $reservations = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $reservation = new Reservation();
        $reservation->setUserID($row["UserID"]);
        $reservation->setCarID($row["CarID"]);
        $reservation->setDate($row["Pickup_Date"]);
        $reservation->setTotal($row["Total_Days"]);
        $reservations[] = $reservation;
    }
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

if ($reservations && count($reservations) > 0) {
    ?>
    <h2>All Reservations</h2>
    <div class="container">
        <?php foreach ($reservations as $reservation) { ?>
            <div class="reservation">
                <h3>Reservation ID: <?php echo $reservation->getCarID(); ?></h3>
                <p><strong>User ID:</strong> <?php echo $reservation->getUserID(); ?></p>
                <p><strong>Car ID:</strong> <?php echo $reservation->getCarID(); ?></p>
                <p><strong>Pickup Date:</strong> <?php echo $reservation->getDate(); ?></p>
                <p><strong>Total Days:</strong> <?php echo $reservation->getTotal(); ?></p>
            </div>
        <?php } ?>
    </div>
<?php 
} else { ?>
    <p>No reservations found.</p>
<?php
}

require "footer.php";
?>

</body>
</html>
