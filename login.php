<?php 
	session_start();
	include('koneksi.php');

	// session : sebuah var system dari php untuk menyimpan data yang di daftarkan di dalam browser $_SESSSION[]
	if (isset($_POST['login'])) {
		// cari data dari table user dimana username bernilai dari inputan username dan password bernilai dari inputan password,  jika ketemu atau datanya ada maka lempar ke halaman dashboard selain itu kembali ke login

		// id, fullname,  username, password, created_at, updated_at
		// id itu biasanya bertipe data integer karna mau kita pakaikan auto_increment : memmbuat id nya di isi otomatis oleh mysql dan menjadi nomor urut

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($koneksi, "SELECT * FROM tbl_user 
		WHERE username ='$username' AND password ='$password'");
		$cek_login = mysqli_num_rows($query);
		$row = mysqli_fetch_assoc($query);
		if ($cek_login > 0) {
			$_SESSION['USERNAME'] = $_POST['username'];
			$_SESSION['ID_USER']  = $row['id'];
			header("location:home.php");
		}else{
			header("location:login.php?login=gagal");
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminLTE</title>
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />


    <style>
      .container {
        min-width: 50%;
        /* background-color: white; */
      }
      .card {
        background-color: white;
        max-width: 350px;
        height: auto;
      }
      body {
        background-color: rgb(231, 218, 218);
      }

      input .emailIcon {
        background-image: url("");
      }

      .containerInput {
        display: flex;
      }

      .containerInput i {
        margin-left: -30px;
        margin-top: 12px;
      }
    </style>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="sticky-nav">
      <!-- <a class="navbar-brand container" href="#">Navbar</a> -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div
        class="collapse navbar-collapse container"
        id="navbarSupportedContent"
      >
        <a class="navbar-brand" href="index.php">E-commerce</a>
        
      </div>
    </nav>

      <div class="scroll text-white">

      </div>
    </div>

    <div class="container mb-5">
      <h1 class="text-center mt-5 p-3"><b>Login</b></h1>
      <div class="card mx-auto p-3 rounded-0">
		  <?php if (isset($_GET['login']) AND $_GET['login'] == 'gagal'): ?>
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Upss!</strong> Mohon Periksa Kembali Username dan Password Anda !!
			  </div>
			<?php endif ?>
			<?php if (isset($_GET['login']) AND $_GET['login'] == 'access'): ?>
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Upss!</strong> anda harus login terlebih dahulu !!
			  </div>
			<?php endif ?>
        <form action="" method="post">
			
          <h6 class="text-center p-2">Sign in to start your session</h6>
          <div class="form-group">
            <div class="containerInput">
              <input type="text" class="form-control" name="username" placeholder="Username" required>
              <i class="bi bi-key-fill"></i>



            </div>
          </div>
          <div class="form-group">
            <div class="containerInput">
            	<input type="password" class="form-control" name="password" placeholder="Password" required>

              <i class="bi bi-key-fill"></i>
            </div>
          </div>
          <div class="form-group form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Remember Me</label
            >
            <input type="submit" class="btn btn-primary btn-sm btn-block text-white w-50 float-right" name="login" value="Login">

          </div>

          <h6 class="text-center p-3">-OR-</h6>
          <div class="btn-bottom">
            <button type="button" class="btn btn-primary btn-sm btn-block">
              <i class="fa-brands fa-facebook"></i>
              Sign in using facebook
            </button>
            <button type="button" class="btn btn-danger btn-sm btn-block">
              <i class="fa-brands fa-google-plus-g"></i>
              Sign in using Google
            </button>
          </div>
          <div class="forgot-ps mt-3">
            <a href="#">I forgot my password</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<!-- Indah  -->