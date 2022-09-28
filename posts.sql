CREATE TABLE `Posts` (
  `postID` INT NOT NULL AUTO_INCREMENT,
  `userID` VARCHAR(140) NULL,
  `message` VARCHAR(140) NULL,
  PRIMARY KEY (`postID`))
ENGINE = InnoDB

-- SQL script creates posts table, should be run manually in phpmyadmin before the code is run.