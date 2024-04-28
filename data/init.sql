CREATE DATABASE IF NOT EXISTS ecoride;
USE ecoride;

CREATE TABLE `user` (
  `userID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `location` varchar(45) NOT NULL,
  `DOB` date DEFAULT NULL,
  `age` int NOT NULL
);

CREATE TABLE employee (
  `EmployeeID` int AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(50),
  `lastname` varchar(50),
  `username` varchar(50) UNIQUE,
  `password` varchar(255),
  `age` int,
  `email` varchar(100) UNIQUE,
  `contactno` varchar(20),
  `location` varchar(100)
);

CREATE TABLE car (
  `carID` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `status` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `BodyType` varchar(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Seats` int NOT NULL,
  `FuelType` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
);

CREATE TABLE reservation (
   `reservationID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `CarID` int NOT NULL,
   `Pickup_Date` datetime NOT NULL,
   `Total_Days` int NOT NULL
);
CREATE TABLE Payment (
    paymentID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10, 2) NOT NULL,
    payment_date DATE NOT NULL,
    payment_method VARCHAR(20) NOT NULL,
    card_number VARCHAR(20) NOT NULL,
    name_on_card VARCHAR(100) NOT NULL,
    cvv VARCHAR(4) NOT NULL,
    expiration_date VARCHAR(20) NOT NULL,
    status VARCHAR(20) NOT NULL
);


CREATE TABLE Verification (
    verificationID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    passport_number VARCHAR(20) NOT NULL
);




CREATE TABLE Administrator (
  `AdminID` int AUTO_INCREMENT PRIMARY KEY,
  `Username` varchar(255),
  `Password` varchar(255)
);

CREATE TABLE `payment` (
  `PaymentID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Total_Amount` decimal(10,0) NOT NULL,
  `Payment_Date` datetime DEFAULT NULL,
  `Payment_Method` varchar(45) DEFAULT NULL,
  `Payment_Status` varchar(45) DEFAULT NULL,
  `Credit_card_no` int NOT NULL,
  `Banking_Details` varchar(45) DEFAULT NULL,
  `Reservation_reservationID` int NOT NULL,
  FOREIGN KEY (`Reservation_reservationID`) REFERENCES `reservation` (`reservationID`)
);

CREATE TABLE Cancellation (
  `CancellationID` int AUTO_INCREMENT PRIMARY KEY,
  `ReservationNumber` int,
  `CancellationConfirmation` varchar(50),
  `RefundInformation` varchar(255)
);

CREATE TABLE breakdowntowing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


