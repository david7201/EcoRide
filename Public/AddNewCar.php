<?php
require "header.php";

if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_car = array(
            "status" => escape($_POST['status']),
            "Brand" => escape($_POST['brand']),
            "Model" => escape($_POST['model']),
            "BodyType" => escape($_POST['bodyType']),
            "Color" => escape($_POST['color']),
            "Seats" => escape($_POST['seats']),
            "FuelType" => escape($_POST['fuelType']),
            "Description" => escape($_POST['description'])
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "car",
            implode(", ", array_keys($new_car)),
            ":" . implode(", :", array_keys($new_car))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_car);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submit']) && $statement) {
    echo "Car successfully added.";
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

<h2>Add Car</h2>
<form method="post">
    <label for="status">Status</label>
    <input type="text" name="status" id="status">
    
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

<a href="index.php">Back to home</a>

<?php include "footer.php"; ?>
