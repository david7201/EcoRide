<?php
require_once 'User.php';

class customer extends user {
    private $firstname;
    private $lastname;
    private $age;
    private $email;
    private $contactno;
    private $location;
    private $DOB;

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getContactno()
    {
        return $this->contactno;
    }

    /**
     * @param mixed $contactno
     */
    public function setContactno($contactno)
    {
        $this->contactno = $contactno;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getDOB()
    {
        return $this->DOB;
    }

    /**
     * @param mixed $DOB
     */
    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }




    // Define the constructor to accept the database connection
    public function __construct($connection) {
        parent::__construct($connection);
    }

    // Define the getConnection method to return the database connection
    public function getConnection() {
        return $this->connection;
    }

    public function registerUser($firstname, $lastname, $username, $password, $age, $email, $contactno, $location)
    {
    }


}
