
	<nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 pb-3 fixed-top">
	
	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse container" id="navbarSupportedContent">
		<a class="navbar-brand" href="#">E-commerce</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="trans.php">Transaksi</a>
			</li>
			
				<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
					
				<!-- </div> -->
				<li class="nav-item">
					<a  class="nav-link float-left" href="menu.php">Menu</a>
					<a  class="nav-link float-left" href="kategori.php">Kategori</a>
					<!-- <a class="dropdown-item" href="#">Another action</a> -->
					<!-- <div class="dropdown-divider"></div> -->
					<a  class="nav-link float-left" href="user.php">User</a>
				</li>
				
			
				
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['USERNAME'] ?>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="keluar.php">Keluar</a>
				</div>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>

<footer class="bg-light text-center text-lg-start fixed-bottom">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright
        <a class="text-dark" href="https://www.linkedin.com/in/indah-oktaviana-431845205/">indah</a>
      </div>
      <!-- Copyright -->
</footer>
