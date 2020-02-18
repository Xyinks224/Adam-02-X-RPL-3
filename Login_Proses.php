<?php
   session_start();
   require_once("Koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT *from login where username = '$username'";
   $query = $connect->query($sql);
   $hasil = $query->fetch_assoc();
   
   if($query->num_rows == 0) {
     echo "<div align='center'>
     !!Akun Belum Terdaftar!! <br>
     <a href='Login.php'>Back</a></div>";
   } 

   else {
     if($password <> $hasil['password'] && $username <> $hasil['username']) {
       echo "<div align='center'>Username/Password salah! <br>
       <a href='Login.php'>Back</a></div>";
     } 

     else {
       $_SESSION['username'] = $hasil['username'];
       header('location:Login_Sukses.php');
     }
   }
?>