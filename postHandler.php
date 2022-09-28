<?php
session_start();
include "connect.php";
?>

<?php

$person = $_SESSION['person'];
$mess = filter_input(INPUT_POST, 'message');
$query1 = "INSERT INTO posts (userID, message) VALUES (:person, :msg)"; //Inserts post into the posts table
$statement1 = $conn->prepare($query1);
$statement1 -> bindValue(':person', $person);
$statement1 -> bindValue(':msg', $mess);
$statement1->execute();
$statement1->closeCursor();
header("Location: project_review.php");
?>

<!-- This file inserts a post into the posts table. -->