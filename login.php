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
	<header id="main-header" class="bg-primary py-2 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><i class="fa fa-user"></i> Student Login</h1>
				</div>
				<div class="col-md-2">
					<a href="http://localhost/online/admin/index.php" class="btn btn-warning btn-block" style="margin: 8px 0 0 20em;">Staff Login</a>
				</div>
				<div class="col-md-2">
					<a href="http://localhost/online/admin2/index.php" class="btn btn-warning btn-block"  style="margin: 8px 0 0 20em;">HOD Login</a>
				</div>
			</div>
		</div>
	</header>
	<!--This is section-->
	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				
				
			</div>
		</div>
	
	</section>
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<!----Section2 for showing Post Model ---->
	<section id="post">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							<h5>Login Panel</h5>
						</div>
						<div class="card-body p-3">
							<form action="" method="POST">
								<label class="form-control-label">Roll No</label>
								<input type="text" name="rollno" class="form-control"  />
								<br />
								<label class="form-control-label">Password</label>
								<input type="password" name="password" class="form-control"  />
								<br />
								<input type="submit" name="submit" class="btn btn-primary" style="border-radius:0%;" value="Log In" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br>
	<!----Section3 footer ---->
	<section id="main-footer" class="text-center text-white bg-inverse mt-4 p-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="lead">&copy; <?php echo date("Y")?> Bonafide Requesting System</p>
				</div>
			</div>
		</div>
	</section>
	
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>

</body>
</html>
<!-- Designed and developed by Habibur Rahman Mahid -->
<?php 
	
	if(isset($_POST['submit'])){
		$rollno = $_POST['rollno'];
		$password = $_POST['password'];

		$password = md5($_POST['password']);

		include 'inc/config.php';

		$sql = "SELECT * FROM users WHERE rollno = '$rollno' AND password = '$password'";

		$run = mysqli_query($con,$sql);
		$check = mysqli_num_rows($run);

		$name = $_GET['name'];

		if($check == 1){
			session_start();
			$_SESSION['rollno'] = $rollno;
			
			echo "<script> 
					window.open('dashboard.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Email or Password Invaild');
			window.open('index.php','_self');
			</script>";
		}
	}

 ?>