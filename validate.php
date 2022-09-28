<?php
include "connect.php";
$getData = 'SELECT * FROM users'; //Gets users
$statement = $conn -> prepare($getData);

try {
    $statement -> execute();
} catch (PDOException $e) {
echo "ERROR" . $e->getMessage();
}

$data = $statement -> fetchALL();
$statement -> closeCursor();

$usern = filter_input(INPUT_POST, 'user'); //inputted username
$pass = filter_input(INPUT_POST, 'password'); //inputted password
$in = false;

foreach ($data as $user) {
  //echo $user['userName'];
    if ($usern == $user['userName'] && $pass == $user['userPassword']) { //Checks if username matches password then logs in user.
      //echo "IN";
      session_start();
      $_SESSION['person'] = $usern; //starts session for user
      $in = true;
      if(isset($_POST['remember'])) {
        setcookie('username', $usern, time()+3600*7);
        //setcookie('password', $pass, time()*3600*24*7)
      }
      header("Location: homepage.php");
      exit();
    }
  }


  echo $in;
  if (!$in) {
    //echo "NOT IN";
    header('Location: SignIn.php', true);
  }
?>

