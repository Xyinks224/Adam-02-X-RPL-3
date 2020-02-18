<?php
   require_once("Koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT *from login where username = '$username'";
   $query = $connect->query($sql);

   if($query->num_rows < 0) {
     echo "<div align='center'>!
     !Akun Sudah Terdaftar!! <br>
     <a href='Register.php'>Back</a>
     </div>";
   } 

   else {
     if(!$username || !$password) {
       echo "<div align='center'><br>
       !!Data Tidak Lengkap
        <a href='Register.php'>Back</a>";
     } 

     else {
       $data = "INSERT into login values (null, '$username', '$password')";
       $save = $connect->query($data);
       if($save) {
         echo "<div align='center'>
         !!REGISTER SUKSES!!<br> 
         <a href='Login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>!!REGISTER GAGAL!!</div>";
       }
     }
   }
?>