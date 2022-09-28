<?php
include "connect.php";
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form id="SignUp" action="createUser.php" method="post">
        <h3>Sign Up</h3>
        <div id="members">
            <input type="text" id="fname" name="firstName" placeholder="firstName">
            <input type="text" id="lname" name="lastName" placeholder="lastName"> <br><br>
            <input type="text" id="1user" name="userName" placeholder="userName"><br><br>
            <input type="text" id="email" name="email" placeholder="email"><br><br>
            <input type="text" id="1pass" name="pass" placeholder="pass"> <br> <br>
            <input type="submit" value="Submit"></input>
            <a href="SignIn.php"> Sign In Instead</a>
        </div>
    </form>
</body>