<?php
require "header.php";
require "car.php"; // Ensure this path is correct
require "../src/DBconnect.php"; // Database connection

if (isset($_POST['submit'])) {
    try {
        $car = new Car();
        $car->set_brand($_POST['brand']);
        $car->set_model($_POST['model']);
        $car->set_bodyType($_POST['bodyType']);
        $car->set_color($_POST['color']);
        $car->set_seats($_POST['seats']);
        $car->set_fuelType($_POST['fuelType']);
        $car->set_description($_POST['description']);
        $car->set_status($_POST['status']);
        $car->set_image($_POST['image']);

        $car->save($connection);

        echo "Car successfully added.";
    } catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
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
        input[type=submit] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #a9c9a4;
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
</head>
<body>

<h2>Add Car</h2>
<form method="post">
    <label for="status">Status</label>
    <input type="text" name="status" id="status">

    <label for="image">Image</label>
    <input type="text" name="image" id="image">
    
    <label for="brand">Brand</label>
    <input type="text" name="brand" id="brand">
    
    <label for="model">Model</label>
    <input type="text" name="model" id="model">
    
    <label for="bodyType">Body Type</label>
    <input type="text" name="bodyType" id="bodyType">
    
    <label for="color">Color</label>
    <input type="text" name="color" id="color">
    
    <label for="seats">Seats</label>
    <input type="text" name="seats" id="seats">
    
    <label for="fuelType">Fuel Type</label>
    <input type="text" name="fuelType" id="fuelType">
    
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    
    <input type="submit" name="submit" value="Submit">
</form>

<a href="Admin.php">Back to home</a>

<?php include "footer.php"; ?>
</body>
</html>
