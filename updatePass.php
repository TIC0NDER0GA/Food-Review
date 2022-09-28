<?php
session_start();
include "connect.php";


$newt = filter_input(INPUT_POST, 'password');
$lemon = $_SESSION['person'];

$query = 'UPDATE users  
 SET userPassword = :pseudo 
 WHERE userName = :keyN';

$statement = $conn -> prepare($query);
$statement -> bindValue(':pseudo', $newt);
$statement -> bindValue(':keyN', $lemon);

try {
    $statement -> execute();
    $statement -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
header('Location: Settings.php');
?>