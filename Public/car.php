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
  public $status;
  public $amount;
  public $image;


        function set_amount($amount) {
          $this->amount = $amount;
        }
        
        function get_amount() {
          return $this->amount;
        }
        
          
    function set_image($image) {
      $this->image = $image;
    }
    
    function get_image() {
      return $this->image;
    }
    
    function save($connection) {
      $sql = "INSERT INTO car (Brand, Model, BodyType, Color, Seats, FuelType, Description, status, image) VALUES (:brand, :model, :bodyType, :color, :seats, :fuelType, :description, :status, :image)";
      $statement = $connection->prepare($sql);
      $statement->execute([
          'brand' => $this->brand,
          'model' => $this->model,
          'bodyType' => $this->bodyType,
          'color' => $this->color,
          'seats' => $this->seats,
          'fuelType' => $this->fuelType,
          'description' => $this->description,
          'status' => $this->status,
          'image' => $this->image
      ]);
  }
  
  
  
  
  
  function set_status($status) {
    $this->status = $status;
  }
  
  function get_status() {
    return $this->status;
  }
  
  


  function set_id($id) { $this->id = $id; }
  function set_brand($brand) { $this->brand = $brand; }
  function set_model($model) { $this->model = $model; }
  function set_bodyType($bodyType) { $this->bodyType = $bodyType; }
  function set_color($color) { $this->color = $color; }
  function set_seats($seats) { $this->seats = $seats; }
  function set_fuelType($fuelType) { $this->fuelType = $fuelType; }
  function set_description($description) { $this->description = $description; }

  function get_id() { return $this->id; }
  function get_brand() { return $this->brand; }
  function get_model() { return $this->model; }
  function get_bodyType() { return $this->bodyType; }
  function get_color() { return $this->color; }
  function get_seats() { return $this->seats; }
  function get_fuelType() { return $this->fuelType; }
  function get_description() { return $this->description; }

  
}


?>
