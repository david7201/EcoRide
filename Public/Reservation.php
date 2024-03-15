<?php
class Reservation {
  public $id;
  public $ReservationNumber;
  public $userID;
  public $CarID;
  public $Date;
  public $time;

  function save($connection) {
    $sql = "INSERT INTO reservations (fullname, email, phone, date, time, message) VALUES (:fullname, :email, :phone, :date, :time, :message)";
    $statement = $connection->prepare($sql);
    $statement->execute([
        'fullname' => $this->fullname,
        'email' => $this->email,
        'phone' => $this->phone,
        'date' => $this->date,
        'time' => $this->time,
    ]);
  }


  function set_id($id) { $this->id = $id; }
  function set_fullname($fullname) { $this->fullname = $fullname; }
  function set_email($email) { $this->email = $email; }
  function set_phone($phone) { $this->phone = $phone; }
  function set_date($date) { $this->date = $date; }
  function set_time($time) { $this->time = $time; }
  function set_message($message) { $this->message = $message; }

  function get_id() { return $this->id; }
  function get_fullname() { return $this->fullname; }
  function get_email() { return $this->email; }
  function get_phone() { return $this->phone; }
  function get_date() { return $this->date; }
  function get_time() { return $this->time; }
  function get_message() { return $this->message; }
}
?>
