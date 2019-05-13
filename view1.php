<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");
}

if($_SESSION['level']!="manager"){
  header('location:admin.php');

}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar film</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
   <a class="navbar-brand" href="#">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="#">
  <body>
  <h1><marquee>SINUS A STORE</marquee></h1> 
  </div>
  </div>    
  </div>
  </nav> 

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

</style>
</head>
<body style="background: url(walpaper1.jpg);">
  <span style="font-size:30px;cursor:pointer;color: black;" onclick="openNav()">&#9776; open</span>
  <br><br><br>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home1.php">Home</a>
  <a href="film.php">Tersedia</a>
  <a href="view1.php">Terlaris</a>
  <a href="logout.php">Logout</a>
  <h1 style="color: black;">ENJOY IT</h1>
</div>


  <?php
    include 'connect.php';
    $getProduct = $connection ->query("SELECT * FROM product");
    while ($fetchProduct = $getProduct ->fetch_assoc()) { 
  ?>

  <table style="display:inline-table;width:350px">
    <tr>
      <td><img src="<?=$fetchProduct['image']?>" width="250" height="250"></td>
    </tr>
    <tr>
      <td>
        <strong><?=$fetchProduct["name"]?></strong><br>
        <?=$fetchProduct["description"]?><br>
        RP. <?=number_format($fetchProduct["price"])?>
      </td>
    </tr>
    <tr>
      <td>
          <a href="Beli.php"><button>Beli</button></a>
        <br>
        <br>
        <br>
        <br>
      </td>
    </tr>
  </table>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  <?php
    }
  ?>
</body>
</html>
