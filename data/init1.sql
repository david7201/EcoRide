CREATE DATABASE EcoRide;
 use EcoRide;
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
    UserID INT,
    CarID INT,
    DateAndTime DATETIME,
    TotalAmount DECIMAL(10, 2),
    IdentityVerificationStatus VARCHAR(50),
    PaymentDetails VARCHAR(255),
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (CarID) REFERENCES Car(CarID)
);

CREATE TABLE DeliveryCollection (
    DeliveryCollectionID INT PRIMARY KEY AUTO_INCREMENT,
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
    BreakdownFormID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    DriverID INT,
    RelevantUpdates VARCHAR(255),
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (DriverID) REFERENCES DeliveryCollection(DriverID)
);

 
 );