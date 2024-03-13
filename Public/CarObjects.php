<!DOCTYPE html>
<html>
<body>

<?php
require_once 'car.php'; 

$car1 = new Car();
$car2 = new Car();

$car1->set_id(1);
$car1->set_brand("Toyota");
$car1->set_model("Corolla");
$car1->set_bodyType("Sedan");
$car1->set_color("Red");
$car1->set_seats("5");
$car1->set_fuelType("Gasoline");
$car1->set_description("A reliable and fuel-efficient car.");

$car2->set_id(2);
$car2->set_brand("Ford");
$car2->set_model("Mustang");
$car2->set_bodyType("Coupe");
$car2->set_color("Blue");
$car2->set_seats("4");
$car2->set_fuelType("Gasoline");
$car2->set_description("A classic American muscle car with high performance.");

echo "<h2>Cars</h2>";
echo "<p>" . $car1->get_brand() . " " . $car1->get_model() . ": " . $car1->get_description() . "</p>";
echo "<p>" . $car2->get_brand() . " " . $car2->get_model() . ": " . $car2->get_description() . "</p>";
?>

</body>
</html>
