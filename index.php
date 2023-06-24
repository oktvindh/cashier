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

      body p {
        text-align: center;
        padding-top: 50px;
        scrolldelay: "85";
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
      /* .top-header {
        background-image: url("https://images.unsplash.com/photo-1546272989-40c92939c6c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=682&q=80");
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .scroll {
        margin-left: 48%;
        margin-right: 50%;
        padding-top: 25%;
        font-size: 70px;
      } */
    </style>
  </head>
  <body>
    <!-- <div class="top-header"> -->
      <!-- <h1 class="text-center pt-5 text-white">
        selamat datang di website ku!! pook..pook..pook
      </h1> -->
      <div class="scroll text-white">
        <!-- <i class="bi bi-balloon"></i> -->
      </div>
    </div>
    <!-- ini bagian navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="sticky-nav">
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
        <a class="navbar-brand" href="#">E-commerce</a>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php"
              >Login <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="regis.php"
              >Register <span class="sr-only">(current)</span></a
            >
          </li>  
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
    <!-- ini bagian akhir navbar -->
      <body>
        <div>
          <p>
            <marquee behavior="slide">Silakan registrasi terlebih dahulu.</marquee>
          </p>
          
        </div>
      </body>
   
    
    <footer class="bg-light text-center text-lg-start fixed-bottom">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-dark" href="#">e-commerce</a>
      </div>
      <!-- Copyright -->
    </footer>
  </body>
</html>
<!-- Indah  -->
