<?php
include "connect.php";

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$userName = filter_input(INPUT_POST, 'userName');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');


$query = 'INSERT INTO users (userName,userPassword,firstName,lastName,email) 
 VALUES (:userName, :pass, :firstName, :lastName, :email) ';

$statement = $conn -> prepare($query);
$statement -> bindValue(':userName', $userName);
$statement -> bindValue(':pass', $pass);
$statement -> bindValue(':firstName', $firstName);
$statement -> bindValue(':lastName', $lastName);
$statement -> bindValue(':email', $email);
try {
    $statement -> execute();
    $statement -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

header('Location: SignUp.php');
?>