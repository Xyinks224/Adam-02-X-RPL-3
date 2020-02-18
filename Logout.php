<?php
   session_start();
   session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="css_logout.css">
</head>
<body>
	<br><br><br><br><br><br><br><br><br>

<div>
	<p class="tulisan1">LOGOUT BERHASIL</p>
	<br>
</div>

<div class="kotak">
	<p class="tulisan2">Login Kembali</p>
	<center><a href="Login.php" class="link">Login</a></center>
</div>
</body>
</html>