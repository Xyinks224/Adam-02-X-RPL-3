<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:Login.php'); 
} 
else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="isiresto.css">
</head>
<body>
	<div class="menu">
<ul class="horizontal">
	<li><a href="Logout.php" class="link">Logout</a></li>
</ul>
</div>
<br>
<br>
<div id="box1">
	<div class="judul1">Menu </div>
	<br>
	<div class="judulmenu">Makanan: </div>
	<br>
	<table border="0" cellpadding="8" cellspacing="0">
		<tr>
			<td>
				<img src="ago.jpg" class="img1">
				<br>
				<p class="isimakan">Ayam Goreng</p>
			</td>
			<td>
				<img src="miay.jpg" class="img1">
				<br>
				<p class="isimakan">Mie Ayam</p>
			</td>
			<td>
				<img src="mipa.jpg" class="img1">
				<br>
				<p class="isimakan">Mie Pangsit</p>
			</td>
		</tr>
		<tr>
			<td>
				<img src="naja.jpg" class="img1">
				<br>
				<p class="isimakan">Nasi Goreng Jawa</p>
			</td>
			<td>
				<img src="sola.jpg" class="img1">
				<br>
				<p class="isimakan">Soto Lamongan</p>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<div class="judulmenu">Minuman: </div>
	<br>
	<table border="0" cellpadding="8" cellspacing="0">
		<tr>
			<td>
				<img src="jual.jpg" class="img1">
				<br>
				<p class="isimakan">Jus Alpukat</p>
			</td>
			<td>
				<img src="teh.jpg" class="img1">
				<br>
				<p class="isimakan">Teh</p>
			</td>
			<td>
				<img src="susu.jpg" class="img1">
				<br>
				<p class="isimakan">Susu Hangat </p>
			</td>
		</tr>
		<tr>
			<td>
				<img src="kopi.jpg" class="img1">
				<br>
				<p class="isimakan">Kopi</p>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<div class="judulmenu">Desert: </div>
	<br>
	<table border="0" cellpadding="8" cellspacing="0">
		<tr>
			<td>
				<img src="desert.jpeg" class="img1">
				<br>
				<p class="isimakan">Passion Berry</p>
			</td>
			<td>
				<img src="es krim.jpg" class="img1">
				<br>
				<p class="isimakan">Es Krim Buah</p>
			</td>
		</tr>
	</table>
</div>
</body>
</html>