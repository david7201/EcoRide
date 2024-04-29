<?php
require_once 'car.php'; 

class CarTest
{
    protected $car;

    public function testCarSuccess()
    {
        $this->car = new Car();

        $this->car->set_id(1);
        echo "Car ID: " . $this->car->get_id() . "<br>";

        $this->car->set_brand('Toyota');
        echo "Brand: " . $this->car->get_brand() . "<br>";

        $this->car->set_model('Corolla');
        echo "Model: " . $this->car->get_model() . "<br>";

        $this->car->set_bodyType('Sedan');
        echo "Body Type: " . $this->car->get_bodyType() . "<br>";

        $this->car->set_color('Red');
        echo "Color: " . $this->car->get_color() . "<br>";

        $this->car->set_seats(5);
        echo "Seats: " . $this->car->get_seats() . "<br>";

        $this->car->set_fuelType('Petrol');
        echo "Fuel Type: " . $this->car->get_fuelType() . "<br>";

        $this->car->set_description('Well-maintained car with low mileage');
        echo "Description: " . $this->car->get_description() . "<br>";
    }
}

$carTest = new CarTest();

$carTest->testCarSuccess();
?>
