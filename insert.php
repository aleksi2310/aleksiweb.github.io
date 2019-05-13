<?php
	session_start();
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");
}

if($_SESSION['level']!="admin"){
  header('location:manager.php');

}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background: url(walpaper.jpg);">
	<h1>Create Film</h1>
	<form action="addproduct.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Title</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Film's Description</td>
					<td>:</td>
					<td><textarea name="description"></textarea></td>
				</tr>
				<tr>
					<td>Price</td>
					<td>:</td>
					<td><input type="number" name="price"></td>
				</tr>
				<tr>
					<td>Cover</td>
					<td>:</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button>Save Product</button></td>
				</tr>
			</table>
	</form>
	<?php
		if (isset($_SESSION["message"])) {
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
			}
	?>
</body>
</html>