<?php
include 'config.php';
// jika form di submit, masukkan data ke basis data.
if (isset($_POST['submit'])){
// menghapus backslashes
$email = stripslashes($_POST['email']);
$username = stripslashes($_POST['username']);
$nim = stripslashes($_POST['nim']);
$password = stripslashes($_POST['password']);
//memberi perlindungan dari karakter unik atau khusus dalam string
$email = mysqli_real_escape_string($connect,$email);
$username = mysqli_real_escape_string($connect,$username);
$nim = mysqli_real_escape_string($connect,$nim);
$password = mysqli_real_escape_string($connect,$password);
$query = mysqli_query($connect,"INSERT into user (email,username, nim,password)
VALUES ('$email','$username', '$nim', '".md5($password)."')");
if($query){
echo "<h3>Alhamdulilah...Register Berhasil</h3>
<br/>Silahkan klik di sini untuk <a href='login.php'>Login</a>";
}
}else{
header('Location: login.php');
}
