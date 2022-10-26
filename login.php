<?php

session_start();

include 'koneksi.php';
include 'functions.php';

if(isset($_POST["login"])){
 
$username = $_POST['username'];
$password = $_POST['password'];
 
   if(empty($username)){
        $error="<p>Silahkan Masukan username Anda</p>";
    }else if(empty($password)){
        $error="<p>Silahkan Masukan Password Anda</p>";
    }else{
        $cekadmin=mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
        $adaadmin=mysqli_num_rows($cekadmin);
        if($adaadmin == 1){
            $data = mysqli_fetch_assoc($cekadmin);
            $_SESSION['id']=$data['id'];
            $_SESSION['user']=$username;    

            header("location:index2.php");
            
        }else{
          $cekuser=mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
          $adauser=mysqli_num_rows($cekuser);
        
          if ($adauser == 1) {
            $data = mysqli_fetch_assoc($cekuser);
            $_SESSION['id']=$data['id'];
            $_SESSION['user']=$username;
            
            header("location:index2.php");
          } else {
            echo "<script>
			alert('Email / password salah !');
		</script>";
          }
          

        }
    }
	
}



if(isset($_POST['daftar'])){

	if(registrasi($_POST) > 0){
		echo "<script>
			alert('user baru berhasil ditambahkan');
		</script>";
	}else{

		echo mysqli_error($koneksi);
	}
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="nggonlogin/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="nggonlogin/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nggonlogin/util.css">
	<link rel="stylesheet" type="text/css" href="nggonlogin/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #fff;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-43">
						Login
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
								Login
						</button>
					</div>

					<div class="text-center p-t-10 p-b-10">
							-- Atau --	
					</div>

					<div class="container-login100-form-btn">
						<button class="btn login101-form-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Daftar
						</button>

						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form action="" method="post">
											<div class="wrap-input101 ">
												<input class="input101" type="text" name="name" placeholder="Nama">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="text" name="email" placeholder="e-mail">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="text" name="telp" placeholder="telp">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="password" name="password2" placeholder="password">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="password" name="password3" placeholder="Konfirmasi password">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="text" name="alamat" placeholder="Alamat">
											</div>

											<div class="wrap-input101 ">
												<input class="input101" type="text" name="ttl" placeholder="ttl">
											</div>
										</form>
									</div>
									<div class="modal-footer" >
										<button type="submit" class="btn btn-daftar" name="daftar">Daftar</button>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</form>

				<div class="login100-more" >
					<img src="assets/img/hero.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	
	
	
	
<!--===============================================================================================-->
	<script src="nggonlogin/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/popper.js"></script>
	<script src="nggonlogin/bootstrap.min.js"></script>
	<script src="nggonlogin/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/moment.min.js"></script>
	<script src="nggonlogin/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="nggonlogin/main.js"></script>

</body>
</html>
