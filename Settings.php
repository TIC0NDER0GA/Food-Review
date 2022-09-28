<?php
session_start();
include "connect.php";
if (!isset($_SESSION['person'])) { //sends the user to the sign in page if not signed in
    header("Location: SignIn.php");
}
    //echo $_SESSION['person'];
    //echo $_SESSION['firstName'];
    //echo $_SESSION['lastName'];
    //echo $_SESSION['email'];
?>

<body>
    <div class="topnav">
    <a href="homepage.php">Home</a>
    <a href="project_review.php">Reviews</a>
    <a href="community.html">Community</a>
    <a class = "acitve" href="Settings.php">Settings</a>
    </div>
    <div id="left">
        
        <link rel="stylesheet" href="main.css">    
        <!-- <h2><?php echo $_SESSION['firstName']. " " . $_SESSION['lastName'] . "(" . $_SESSION['person'] . ")"; ?></h2> -->
        <!-- <p><?php echo $_SESSION['email']; ?></p> -->
        </div">

        <div>
            <br>
            <h1>Profile Settings</h1>
            <br>
            <form action="updateName.php" method="post"> <!-- Form that updates name of user-->
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname">
                <input type="submit" value="Change">
            </form>
            <form action="updateUser.php" method="post"> <!-- Form that updates username of user-->
                <label for="user"> Reset Username:</label>
                <input type="text" id="user" name="user">
                <input type="submit" value="Change">
            </form>
            <form action="updateEmail.php" method="post"> <!-- Form that updates email of user-->
                <label for="email"> Reset Email:</label>
                <input type="text" id="email" name="email">
                <input type="submit" value="Change">
            </form>
            <form action="updatePass.php" method="post"> <!-- Form that updates password of user-->
                <label for="password">Reset Password:</label>
                <input type="text" id="password" name="password">
                <input type="submit" value="Change">
            </form>
            <form action="./logout.php"> <!-- Form that logs user out -->
                <input type="submit" value="Logout">
            </form>
        </div>
</body>