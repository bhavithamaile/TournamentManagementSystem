<!DOCTYPE html>
<html>

<head>
<style>
body {
    background-image: url("expense.jpg");
    background-color:	#F0FFFF;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }

h1 {
    color: black;
    text-align: center;
    font-family: "SIMPSON";
    font-size: 60px;
}

form {
	text-align:center;
	font-size:30px
}
.input {
  height: 26px;
    width: 250px;
    border: 1px solid #d2d2d2;
    margin-bottom: 20px;
}

.btn {
      background-color: green;
      color: white;
    border: 1px solid green;
    padding: 8px 24px;
    cursor: pointer;
    border-radius: 4px;
}
</style>
</head>
<body>
<h1>EXPENSE TRACKER</h1>
<form action="index.php" method="post">
  <label for="username">Username:&nbsp;&nbsp;</label>
  <input type="text" class="input" name="username" placeholder="yourname" required>
  <br>
  <label for="password">Password:&nbsp;&nbsp;</label>
  <input type="password" name="password" class="input" placeholder="password" required>
<br>
<input type="submit" value="Login" class="btn">
<p><a href="register.php" class="">SignUp</a></p>


</form>


<?php
 ini_set("display_errors", "0");
 // error_reporting(E_ALL);
 ob_start();
 session_start();
 $con = require_once 'dbconnect.php';
 

 if (isset($_SESSION['username'])!="" ) {
  // header("Location: Expenses.php");
  // exit;
 }
 
 $error = false;
 
 if( isset($_POST['username']) ) { 
  

  $username = trim($_POST['username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  
  if(empty($username)){
   $error = true;
   $usernameError = "Please enter your username.";
  }
  
  if(empty($pass)){
   $error = true;
   $errMSG = "Please enter your password.";
  }
  
  
  if (!$error) {

   $res=mysqli_query($con, "SELECT userId, userName, userPass FROM users WHERE userName= '$username' AND userPass = '$pass' ");
   $row=mysqli_fetch_array($res, MYSQLI_NUM);
   
   if(!is_null($row)) {
    session_start();
    $_SESSION['username'] = $row[0];
    header("Location: category.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }

?>

<p style="color: red; text-align: center; font-size: 1.2em;"><?php echo $errMSG ?></p>
</body>
</html>