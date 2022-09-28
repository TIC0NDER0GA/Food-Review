<?php
include "connect.php";
?>


<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="main.css">
</head>
<!-- Signs user into the website -->
<body>
    <form id="Signin" action="validate.php" method="post">
        <h3>Sign In</h3>
        <input type="text" id="user" name="user" placeholder="user"><br><br>
        <input type="text" id="password" name="password" placeholder="password"> <br><br>
        <input type="checkbox" id="remember" name="remember" value="remember"> Remember Me<br><br>
        <input type="submit" value="Submit"></input><br><br>
        <a href="SignUp.php">Sign Up Instead</a>
    </form>
</body>

<?php
global $user;
//echo isset($_COOKIE['username']);
if (isset($_COOKIE['username'])) {
$user = $_COOKIE['username'];
//echo $user;
}
?>

<script type="text/javascript">
  var user = <?php echo json_encode($user); ?>;
  if (user != "[object Object]") {
    var box = document.getElementById("user");
    box.value = user;
  }
</script>