CREATE TABLE users (
    userID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    userName VARCHAR(255) NOT NULL,
    userPassword varchar(255) NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL
    ) ENGINE=InnoDB;