<?php
	session_start();

	if (!isset($_GET["id"])) {
		header("location:view.php");
		exit();
	}
	include 'connect.php';

	$id = $_GET["id"];

	$getData = $connection ->query("SELECT * FROM product WHERE id =".$id);
	if($getData ->num_rows==0){
		header("location:view.php");
		exit();
	}

	$getData = $getData ->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<body style="background: url(walpaper.jpg);">
	<h1>Update Product</h1>
	<form action="updateproduct.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$_GET["id"]?>">
			<table>
				<tr>
					<td>Product Name</td>
					<td>:</td>
					<td><input type="text" name="name" value="<?=$getData["name"]?>"></td>
				</tr>
				<tr>
					<td>Product Description</td>
					<td>:</td>
					<td><textarea name="description"><?=$getData["description"]?></textarea></td>
				</tr>
				<tr>
					<td>Product Price</td>
					<td>:</td>
					<td><input type="number" name="price"value="<?=$getData["price"]?>"></td>
				</tr>
				<tr>
					<td>Product Image</td>
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