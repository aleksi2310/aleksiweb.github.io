<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin.php'); }
   require_once("connect.php");
?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<form action="proseslogin.php" method="post">
</head>
<body style="background: url(casper2.jpg);">


<div align="center" style="color:black">
	<div class="box" align="center">
		<h2>Login</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>password</label>
		</div>
		<input type="submit" name="submit" value="submit">
		<button> <a href="daftar.php">register</a></button>
	
	</form>
	</div>
</div>

<script 
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="script.js"></script>

</body>
</html>
