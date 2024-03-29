<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<!DOCTYPE HTML>  
<html>
<head>
<title>Form daftar</title>
<style>
.error {color: #00b101;}
</style>
<form action="prosesdaftar.php" method="post">
  
</head>
<body style="background: url(casper.jpg);">

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = $usiaErr = $nimErr = $biografiErr = $jurusanErr = "";
$username = $password = $passErr = $email = $gender = $biografi = $website = $nim = $jurusan = $usia = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM is required";
  } else {
    $nim = test_input($_POST["nim"]);
    if (!preg_match("/^[0-9 ]*$/",$nim)) {
      $nimErr = "Only Numbers allowed"; 
    }
  } 
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $nim = test_input($_POST["password"]);
    if (!preg_match("/^[0-9 ]*$/",$password)) {
      $nimErr = "Only Numbers allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["jurusan"])) {
    $jurusanErr = "Please Select One";
  } else {
    $jurusan = test_input($_POST["jurusan"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["usia"])) {
    $usiaErr = "Age is required";
  } else {
    $usia = test_input($_POST["usia"]);
    if (!preg_match("/^[0-9 ]*$/",$usia)) {
      $usiaErr = "Only Numbers allowed"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["biografi"])) {
    $biografiErr = "Biografi is required";
  } else {
    $biografi = test_input($_POST["biografi"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div align="center" style="color:white">
<h2> Form Data </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>Username</td>
   <td>: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
   <td>Password</td>
   <td>: <input type="password" name="password">
   <span class="error">* <?php echo $passErr;?> </span>
  </tr>
  <tr>
   <td>NIM</td>
   <td>: <input type="text" name="nim" value="<?php echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span></td>
  </tr>
  <tr>
   <td>E-mail</td>
   <td>: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
   <td>Jurusan</td>
   <td>: 
  <select name="jurusan">
    <option value="">-Pilih Jurusan-</option>
     <option value="Sistem Informasi">Sistem Informasi</option>
     <option value="Sistem Komputer">Sistem Komputer</option>
     <option value="Teknik Informatika">Teknik Informatika</option>
  </select>
  <span class="error">* <?php echo $jurusanErr;?></span>
  </td>
  </tr>
  <tr>
   <td>Gender</td>
   <td>:
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">Female
  <span class="error">* <?php echo $genderErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Usia</td>
   <td>: <input type="text" name="usia" value="<?php echo $usia;?>">
  <span class="error">* <?php echo $usiaErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Website</td>
   <td>: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error">* <?php echo $websiteErr;?></span></td>
  </tr>
  <tr>
   <td>Biografi</td>
   <td> : <textarea name="biografi"><?php echo $biografi;?></textarea><span class="error">* <?php echo $biografiErr;?></span></td>
  </tr>
    <tr>
   <td>level</td>
   <td>:
  <select name="level">
    <option value="">-Pilih level anda-</option>
     <option value="admin">admin</option>
     <option value="manager">manager</option>
  </select>
  <span class="error">* <?php echo $jurusanErr;?></span></td>
  </tr>
  <tr><td><img src="Captcha.php"/> </td><td> : <input type="text" placeholder="Captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
</</table>




</form>

</body>
</html>