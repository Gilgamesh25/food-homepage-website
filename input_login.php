<?php
include 'config.php';
session_start();
// jika form di submit, masukkan data ke basis data.
if (isset($_POST['submit'])){
// meghilangkan backslashes
$username = stripslashes($_POST['username']);
$password = stripslashes($_POST['password']);
//memberi perlindungan dari karakter khusus/unik dalam string
$username = mysqli_real_escape_string($connect,$username);
$password = mysqli_real_escape_string($connect,$password);
//memeriksa apakah user ada di database apa tidak
$query = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' and password='".md5($password)."'");
$rows = mysqli_num_rows($query);
if($rows==1){
$_SESSION['username'] = $username;
// Redirect user to index.php
header("Location: index.php");
}else{
echo "<h3>Maaf, Username atau password Salah.</h3>
<br/>Klik di sini untuk <a href='login.php'>Login</a>";
}
}
