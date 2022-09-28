<?php
session_start();
include "connect.php";


$alias = filter_input(INPUT_POST, 'user'); 
$key = $_SESSION['email'];
$key2 = $_SESSION['person'];
//Updates username of user
$query = 'UPDATE users  
 SET userName = :pseudo 
 WHERE email = :keyN';

$statement = $conn -> prepare($query);
$statement -> bindValue(':pseudo', $alias);
$statement -> bindValue(':keyN', $key);

try {
    $statement -> execute();
    $statement -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
//Updates username on the posts
$query2 = 'UPDATE posts   
 SET userID = :pse 
 WHERE userID = :ke';

$statement1 = $conn -> prepare($query2);
$statement1 -> bindValue(':pse', $alias);
$statement1 -> bindValue(':ke', $key2);


try {
    $statement1 -> execute();
    $statement1 -> closeCursor();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

$_SESSION['person'] = $alias;
header('Location: Settings.php');
?>