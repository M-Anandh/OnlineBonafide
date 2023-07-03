<?php include('inc/head.php'); ?>
<body>
	<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
		<div class="container">
			<button class="navbar-toggler toggler-right" data-target="#mynavbar" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="index.php" class="navbar-brand mr-3">Bonafide Requesting System</a>
			
		</div>
		<!-- Designed and developed by Habibur Rahman Mahid -->
	</nav>
	<!--This Is Header-->
	<header id="main-header" class="bg-danger py-2 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><i class="fa fa-home"></i> Home Page</h1>
				</div>

				<div class="dropdown" style="margin: 13px 0 0 15em;">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="http://localhost/online/login.php">Student Login</a>
    <a class="dropdown-item" href="http://localhost/online/admin/index.php">Staff Login</a>
    <a class="dropdown-item" href="http://localhost/online/admin2/index.php">HOD Login</a>
  </div>
</div>
				<div class="col-md-2">
					<a href="http://localhost/online/register.php" class="btn btn-warning btn-block" style="margin: 13px 0 0 0;">Student Register</a>
				</div>
			</div>
		</div>
	</header>
	<!--This is section-->
		<div class="container">
			<div class="row">
				
				
			</div>
		</div>


		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/firtbanner.png" alt="First slide" style="background-color: #fff;">
      <div class="centered" style=" position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 53px;
  font-weight: 800;
  color: white;">Bonafide Requesting System</div>
    </div>
  </div>
</div>

</body>
</html>