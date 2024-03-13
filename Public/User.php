<?php
class user {
  public $id;
  public $firstname;
  public $secondname;
  public $dateofbirth;
  public $email;
  public $password;
  
   function set_id($id) {
     $this->id = $id;
   }
   
   function get_id() {
     return $this->id;
   }
 
   function set_firstname($firstname) {
     $this->firstname = $firstname;
   }
   
   function get_firstname() {
     return $this->firstname;
   }
 
   function set_secondname($secondname) {
     $this->secondname = $secondname;
   }
   
   function get_secondname() {
     return $this->secondname;
   }
 
   function set_dateofbirth($dateofbirth) {
     $this->dateofbirth = $dateofbirth;
   }
   
   function get_dateofbirth() {
     return $this->dateofbirth;
   }
 
   function set_email($email) {
     $this->email = $email;
   }
   
   function get_email() {
     return $this->email;
   }
 
   function set_password($password) {
     $this->password = $password;
   }
   
   function get_password() {
     return $this->password;
   }
 

 
}
?>