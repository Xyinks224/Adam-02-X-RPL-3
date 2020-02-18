<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:Login_Sukses.php'); }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css_login.css">
</head>
<body>
<div class="kotak_login">
<p class="tulisan_login">Register</p>
 
<form action="Register_Proses.php" method="post">
<label>Username:</label>
<input type="text" name="username" class="form_login" placeholder="Username...">

<label>Password:</label>
<input type="password" name="password" class="form_login" placeholder="Password...">
<br/>
<input type="reset" value="Reset" class="tombol_reset">
<br/>
<br/> 
<input type="submit" class="tombol_login" value="Daftar">
<br/>
<br/>
<br/>
<center>
   <p class="tanya">Sudah Punya Akun?</p>
   <a class="link" href="Login.php">Login</a>
</center>
</form>   
</div>
</body>
</html>
