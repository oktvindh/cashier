<?php 
session_start();

// jika session ada dia bisa masuk ke halaman home, jika tidak ada kita lempar ke halaman login

// if (empty($_SESSION['USERNAME'])) {
// 	header("location:index.php?login=access");
// }

include 'koneksi.php';
// jika tombol add ditekan actionnya adalah: masukkan ke dalam
// nilainya diambil dari inputan, fullname=inputan fullname
// jika berhasil lempar ke halaman user, kalo gagal bikin ke halaman
if (isset($_POST['add'])) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$insert = mysqli_query($koneksi, "INSERT INTO tbl_user (fullname, username, password) 
				VALUES ('$fullname','$username','$password')");
	if ($insert) {
		header("location:login.php?tambah=berhasil");
	}
}

?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
			<style>
				.center {
					margin: 100px auto;
					float: none;
				}
				body{
					background-color: rgb(231, 218, 218);
				}
			</style>
		</head>
		<body>
			<!-- ?php include('inc/navbar.php') ?> -->

			
			<div class="container">
				<div class="row">
					<div class="col-sm-4 center">
						<div class="card">
							<div class="card-body">
								<div class="card-title">
								
									<h3>Registrasi</h3>
								</div>
								
									<!-- form tambah user -->
									<form method="post">
                                    <div class="form-group">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap">
                                    </div>
									<div class="form-group">
                                        <label>User name *</label>
                                        <input type="text" name="username" class="form-control" placeholder="User name">
                                    </div>
									<div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
									<div class="form-group">
                                        
                                        <input onclick="return confirm ('Registrasi Anda berhasil.')" type="submit" name="add" class="btn btn-primary" value="Simpan">
                                    </div>
                                </form>
							
									

								
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		</body>
		</html>
