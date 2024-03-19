<?php
require_once 'sessionactive.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cars</title>
    <style>
  .container {
    max-width: 50%; /* Set the container width to 50% of the screen */
    margin: auto;
    display: grid;
    grid-template-columns: repeat(5, minmax(100px, 1fr)); /* Adjusted to fit five cars per row */
    gap: 10px;
}

.car {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    width: 500px; /* Set fixed width */
    height: 600px; /* Set fixed height */
}

.car h3 {
    margin-bottom: 5px;
    font-size: 14px; /* Increased font size slightly */
}

.car img {
    width: 100%;
    max-width: 80px; /* Adjusted maximum width for smaller image */
    height: auto;
    margin-bottom: 5px;
}



    </style>
</head>
<body>

<?php
require "../common.php";
require_once '../src/DBconnect.php';
require_once 'car.php'; 

try {
    // Fetch all cars from the database
    $sql = "SELECT * FROM car"; 
    $statement = $connection->prepare($sql);
    $statement->execute();

    $cars = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $car = new Car();
        // Populate car object properties
        $car->set_id($row["Carid"]);
        $car->set_brand($row["Brand"]);
        $car->set_model($row["Model"]);
        $car->set_bodyType($row["BodyType"]);
        $car->set_color($row["Color"]);
        $car->set_seats($row["Seats"]);
        $car->set_fuelType($row["FuelType"]);
        $car->set_description($row["Description"]);
        $car->set_amount($row["amount"]); // Set the amount property
        $car->set_image($row["image"]);
        $cars[] = $car;
    }
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

// Include header file
require "header.php";

// Display cars if found
if ($cars && count($cars) > 0) {
    ?>
    <h2>All Cars</h2>
    <div class="container">
        <?php foreach ($cars as $car) { ?>
            <div class="car">
                <!-- Display car information -->
                <h3><?php echo escape($car->get_brand()); ?> <?php echo escape($car->get_model()); ?></h3>
                <p><strong>ID:</strong> <?php echo escape($car->get_id()); ?></p>
                <p><strong>Body Type:</strong> <?php echo escape($car->get_bodyType()); ?></p>
                <p><strong>Color:</strong> <?php echo escape($car->get_color()); ?></p>
                <p><strong>Seats:</strong> <?php echo escape($car->get_seats()); ?></p>
                <p><strong>Fuel Type:</strong> <?php echo escape($car->get_fuelType()); ?></p>
                <p><strong>Description:</strong> <?php echo escape($car->get_description()); ?></p>
                <p><strong>Amount:</strong> $<?php echo escape($car->get_amount()); ?></p> <!-- Display the amount -->
                <?php if ($car->get_image()) { ?>
                    <img src="<?php echo escape($car->get_image()); ?>" alt="Car Image">
                <?php } ?>
                <!-- Reservation form -->
                <form action="addreservation.php" method="post">
    <input type="id" name="carid" value="0">
    <button type="submit">Reserve</button>
</form>

            </div>
        <?php } ?>
    </div>
<?php 
} else { ?>
    <p>No cars found.</p>
<?php
}

// Include footer file
require "footer.php";
?>

</body>
</html>
