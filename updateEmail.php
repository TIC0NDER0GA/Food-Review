<?php
session_start();
include "connect.php";


$new = filter_input(INPUT_POST, 'email');
$lime = $_SESSION['person'];

$query = 'UPDATE users  
 SET email = :pseudo 
 WHERE userName = :keyN';

$statement = $conn -> prepare($query);
$statement -> bindValue(':pseudo', $new);
$statement -> bindValue(':keyN', $lime);

try {
    $statement -> execute();
    $statement -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
$_SESSION['email'] = $new;
header('Location: Settings.php');
?>