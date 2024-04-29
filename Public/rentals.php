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
    max-width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
    gap: 20px; 
}

.car {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px; 
    padding: 20px; 
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.car h3 {
    margin-bottom: 10px; 
    font-size: 16px; 
}

.car p {
    margin-bottom: 8px;
}

.car img {
    width: 100%;
    max-width: 150px; 
    height: auto;
    margin: 10px auto; 
}

.car button {
    padding: 10px 20px; 
    border: none;
    border-radius: 5px;
    background-color: #A9C9A4;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
}

.car button:hover {
    background-color: #0056b3;
}



    </style>
</head>
<body>

<?php
require "../common.php";
require_once '../src/DBconnect.php';
require_once 'car.php'; 

try {
    $sql = "SELECT * FROM car"; 
    $statement = $connection->prepare($sql);
    $statement->execute();

    $cars = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $car = new Car();
        $car->set_id($row["Carid"]);
        $car->set_brand($row["Brand"]);
        $car->set_model($row["Model"]);
        $car->set_bodyType($row["BodyType"]);
        $car->set_color($row["Color"]);
        $car->set_seats($row["Seats"]);
        $car->set_fuelType($row["FuelType"]);
        $car->set_description($row["Description"]);
        $car->set_amount($row["amount"]); 
        $car->set_image($row["image"]);
        $cars[] = $car;

        $_SESSION['carID'] = $car->get_id();

    }
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

require "header.php";
echo "<p style='font-size: 12px; color: #888;'>Please remember the car ID to proceed or delete a reservation.</p>";


if ($cars && count($cars) > 0) {
    ?>
    
    <h2>All Cars</h2>
    <div class="container">
        <?php foreach ($cars as $car) { ?>
            <div class="car">
                <h3><?php echo escape($car->get_brand()); ?> <?php echo escape($car->get_model()); ?></h3>
                <p><strong>ID:</strong> <?php echo escape($car->get_id()); ?></p>
                <p><strong>Body Type:</strong> <?php echo escape($car->get_bodyType()); ?></p>
                <p><strong>Color:</strong> <?php echo escape($car->get_color()); ?></p>
                <p><strong>Seats:</strong> <?php echo escape($car->get_seats()); ?></p>
                <p><strong>Fuel Type:</strong> <?php echo escape($car->get_fuelType()); ?></p>
                <p><strong>Description:</strong> <?php echo escape($car->get_description()); ?></p>
                <p><strong>Amount:</strong> $<?php echo escape($car->get_amount()); ?></p> 
                <?php if ($car->get_image()) { ?>
                    <img src="<?php echo escape($car->get_image()); ?>" alt="Car Image">
                <?php } ?>
<form action="addreservation.php" method="post">
<input type="hidden" name="carid" value="<?php echo escape($car->get_id()); ?>">
    <button type="submit" name="reserve">Reserve</button>
</form><?php
$_SESSION['carID'] = $car->get_id();?>





            </div>
        <?php } ?>
    </div>
<?php 


} else { ?>
    <p>No cars found.</p>
<?php
}


require "footer.php";
?>

</body>
</html>


