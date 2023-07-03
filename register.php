<?php include 'inc/config.php'; ?>
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
					<h1><i class="fa fa-user"></i> Student Register</h1>
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
							<h5>Register Panel</h5>
						</div>
						<div class="card-body p-3">
							<form action="" method="POST">
								<label class="form-control-label">Name</label>
								<input type="text" name="name" class="form-control" required>
								<br />
								<label class="form-control-label">Roll No</label>
								<input type="text" name="rollno" class="form-control"  required>
								<br />
								<label class="form-control-label">Password</label>
								<input type="password" name="password" class="form-control"  required>
								<br />
								<label class="form-control-label">Year of Studying</label>
								<input type="text" name="syear" class="form-control"  required>
								<br />
								<label class="form-control-label">Department</label>
								<input type="text" name="department" class="form-control"  required>
								<br />
								<label class="form-control-label">Academic year</label>
								<input type="text" name="ayear" class="form-control"  required>
								<br />
								<input type="submit" name="register" class="btn btn-primary" style="border-radius:0%;" value="Register" />
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
				<div class="col-md-2">
                    <a href="contactus.php" class="btn">Contact us</a>
                </div>
                <div class="col-md-2">
                    <a href="aboutus.php" class="btn">About us</a>
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
	
	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$rollno = $_POST['rollno'];
		$password = $_POST['password'];
		$syear = $_POST['syear'];
    	$department = $_POST['department'];
    	$ayear = $_POST['ayear'];
    	$password = md5($password);

		$sql = "INSERT INTO users(name,rollno,password,syear,department,ayear)VALUES('$name','$rollno','$password','$syear','$department','$ayear')";

		$run = mysqli_query($con,$sql);

		if($run == true){
			
			echo "<script> 
					window.open('login.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Register Unsuccessful');
			window.open('register.php','_self');
			</script>";
		}
	}

 ?>