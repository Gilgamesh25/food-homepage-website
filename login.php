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
echo "<script> 
		alert('Sukses untuk login');
		document.location.href = 'index.php';
	</script>";
// header("Location: index.php");
}else{
	echo "<script> 
		alert('Username dan Password salah, Silahkan untuk coba login lagi');
		document.location.href = 'login.php';
	</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<title>Document</title>

</head>

<body>
	<section class="vh-100" style="background-image: url('wall1.webp');  background-repeat: no-repeat; background-size: cover;">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<img src="karina.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<form action="login.php" method="POST">

										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											<span class="h1 fw-bold mb-0">Login</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

										<div class="form-outline mb-4">
											<input type="text" id="form2Example17" class="form-control form-control-lg" name="username" placeholder="username" />
											<label class="form-label" for="form2Example17">Username</label>
										</div>

										<div class="form-outline mb-4">
											<input type="password" id="form2Example27" class="form-control form-control-lg" name="password" placeholder="Password" />
											<label class="form-label" for="form2Example27">Password</label>
										</div>

										<div class="pt-1 mb-4">
											<input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Login">
										</div>

										<a class="small text-muted" href="#!">Forgot password?</a>
										<p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
										<a href="#!" class="small text-muted">Terms of use.</a>
										<a href="#!" class="small text-muted">Privacy policy</a>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="bootstrap/js/bootstrap.js"></script>
		<!-- sweetalert js cdn -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.js"></script>
</body>

</html>