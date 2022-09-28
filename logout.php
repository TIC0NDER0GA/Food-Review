<?php
session_start();
session_destroy(); //Logs user out by stopping the session
header('Location: SignIn.php'); //returns user to sign in page
?>