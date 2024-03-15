CREATE DATABASE ecoride;
USE ecoride;

CREATE TABLE User (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  age INT(3),
  location VARCHAR(50),
  date TIMESTAMP
);

CREATE TABLE employee (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  age INT(3),
  location VARCHAR(50),
  date TIMESTAMP
);

CREATE TABLE car (
  Carid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  status VARCHAR(30) NOT NULL
);

CREATE TABLE Reservation (
   ReservationNumber INT PRIMARY KEY AUTO_INCREMENT,
   UserID INT UNSIGNED, -- Make sure this matches the `User.id` definition
   CarID INT UNSIGNED, -- Assuming Carid is also UNSIGNED in the car table
   DateAndTime DATETIME,
   TotalAmount DECIMAL(10, 2),
   IdentityVerificationStatus VARCHAR(50),
   PaymentDetails VARCHAR(255),
   FOREIGN KEY (UserID) REFERENCES User(id),
   FOREIGN KEY (CarID) REFERENCES car(Carid)
);


CREATE TABLE DeliveryCollection (
  DeliveryCollectionID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ReservationNumber INT,
  DriverID INT,
  DeliveryDetails VARCHAR(255),
  CarStatus VARCHAR(50),
  FOREIGN KEY (ReservationNumber) REFERENCES Reservation(ReservationNumber)
);

CREATE TABLE Administrator (
  AdminID INT PRIMARY KEY AUTO_INCREMENT,
  Username VARCHAR(255),
  Password VARCHAR(255)
);

CREATE TABLE Cancellation (
  CancellationID INT PRIMARY KEY AUTO_INCREMENT,
  ReservationNumber INT,
  CancellationConfirmation VARCHAR(50),
  RefundInformation VARCHAR(255),
  FOREIGN KEY (ReservationNumber) REFERENCES Reservation(ReservationNumber)
);

CREATE TABLE BreakdownTowing (
    BreakdownFormID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserID INT UNSIGNED,
    DriverID INT UNSIGNED, -- Ensure this matches the `DeliveryCollectionID` definition
    RelevantUpdates VARCHAR(255),
    FOREIGN KEY (UserID) REFERENCES User(id),
    FOREIGN KEY (DriverID) REFERENCES DeliveryCollection(DeliveryCollectionID)
);



