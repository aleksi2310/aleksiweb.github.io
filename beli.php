<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");
}

if($_SESSION['level']!="manager"){
  header('location:manager.php');

}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<!DOCTYPE html>
<body style="background: url(casper1.jpg);">
<title>Beli film</title>
<div align='center'>
	<br><br><br><br><br>
	<h1>Pembelian Sukses</h1>
<a href='view1.php'><button>Kembali</button></a>
&nbsp;&nbsp;
<a href='logout.php'><button>logout</button></a>
</div>
</body>
</html>