<?php 
//require "SessionActive.php"; ?>global$connection; global$connection;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cars</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #3B5249;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            overflow: hidden;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .car {
            background-color: #C5E4CB;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .car h3 {
            margin-bottom: 10px;
        }

        .car p {
            margin-bottom: 5px;
        }
        img{
            width: 200px;
            height: 150px;
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

    //fetches

    $cars = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $car = new Car();
        // Using setter methods to populate the properties
        $car->set_id($row["Carid"]);
        $car->set_brand($row["Brand"]);
        $car->set_model($row["Model"]);
        $car->set_bodyType($row["BodyType"]);
        $car->set_color($row["Color"]);
        $car->set_seats($row["Seats"]);
        $car->set_fuelType($row["FuelType"]);
        $car->set_description($row["Description"]);
        $car->set_image($row["image"]);
        $cars[] = $car;
    }
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

// Include header file
require "header.php";

// Check if any cars were found
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
                <!----<?php if ($car->get_image()) { ?> --->
            <img src="<?php echo escape($car->get_image()); ?>" alt="Car Image">
        <?php } ?>

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
