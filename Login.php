<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:Login_Sukses.php'); }
require_once("Koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css_login.css">
</head>
<body>
<div class="kotak_login">
    <pre class="namaresto">Selamat Datang Di
    Adam Resto    </pre>
    <hr>
    <p class="tulisan_login">Login</p>
 
    <form action="Login_Proses.php" method="post">
      <label>Username:</label>
      <input type="text" name="username" class="form_login" placeholder="Username...">

      <label>Password:</label>
      <input type="password" name="password" class="form_login" placeholder="Password...">

      <input type="submit" class="tombol_login" value="LOGIN">
      <br/>
      <br/>
      <br/>
      <center>
        <p class="tanya">Belum Punya Akun?</p>
        <a class="link" href="Register.php">Daftar</a>
      </center>
    </form>   
  </div>
</body>
</html>
