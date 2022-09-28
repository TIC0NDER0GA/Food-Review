<?php
session_start();
include "connect.php";


$first = filter_input(INPUT_POST, 'fname');
$last = filter_input(INPUT_POST, 'lname');
$_SESSION['firstName'] = $first;
$_SESSION['lastName'] = $last;
$key = $_SESSION['person'];

$query = 'UPDATE users  
 SET firstName = :firstN, lastName = :lastN 
 WHERE userName = :keyN';

$statement = $conn -> prepare($query);
$statement -> bindValue(':firstN', $first);
$statement -> bindValue(':lastN', $last);
$statement -> bindValue(':keyN', $key);

try {
    $statement -> execute();
    $statement -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

header('Location: Settings.php');

?>