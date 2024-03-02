<?php
class Car {
    public $id;
    public $brand;
    public $model;
    public $bodyType;
    public $color;
    public $seats;
    public $fuelType;
    public $description;

    // Constructor to initialize a Car object with data
    public function __construct($id, $brand, $model, $bodyType, $color, $seats, $fuelType, $description) {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->bodyType = $bodyType;
        $this->color = $color;
        $this->seats = $seats;
        $this->fuelType = $fuelType;
        $this->description = $description;
    }
}
?>