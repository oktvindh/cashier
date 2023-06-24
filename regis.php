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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasir</title>
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

    <div class="container mt-5 mb-5">
      <h1 class="text-center mt-5 p-3"><b>Registrasi</b></h1>
      <div class="card mx-auto p-3 rounded-0">
        <form action="" method="post">
			
          <h6 class="text-center p-2">Sign in to start your session</h6>
          <div class="form-group">
            <div class="containerInput">
              <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap">
              <i class="bi bi-key-fill"></i>
            </div>
            </div>
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
            <!-- <input type="submit" class="btn btn-primary btn-sm btn-block text-white w-50 float-right" name="login" value="Login"> -->
            <input onclick="return confirm ('Registrasi Anda berhasil.')" type="submit" name="add" class="btn btn-primary float-right" value="Simpan">

          </div>

          <h6 class="text-center p-3">-OR-</h6>
          <div class="btn-bottom pb-3">
            <button type="button" class="btn btn-primary btn-sm btn-block">
              <i class="fa-brands fa-facebook"></i>
              Sign up using facebook
            </button>
            <button type="button" class="btn btn-danger btn-sm btn-block">
              <i class="fa-brands fa-google-plus-g"></i>
              Sign up using Google
            </button>
          </div>
        </form>
        
      </div>
    </div>
  </body>
</html>
