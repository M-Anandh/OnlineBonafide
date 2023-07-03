<?php 
	include('inc/head.php'); 
	session_start();

	if (isset($_SESSION['rollno'])) {
		
	}
	else{
		header('location:login.php');
	}

?>
<body>
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
		<div class="container">
			<button class="navbar-toggler toggler-right" data-target="#mynavbar" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="#" class="navbar-brand mr-3">Bonafide Requesting System</a>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav">
					<li class="nav-item px-2"><a href="#" class="nav-link active">Logged in as <?php echo $_SESSION['rollno']?></a></li>
					
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown mr-3">
						
						<li class="nav-item">
							<a href="logout.php" class="nav-link"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--This Is Header-->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<header id="main-header" class="bg-primary py-2 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><i class="fa fa-tachometer"></i> Dashboard</h1>
				</div>
			</div>
		</div>
	</header>
	<!--This is section-->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md-3">
					<a href="#" class="btn btn-primary btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i> Apply Bonafide</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-warning btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addCateModal"><i class="fa fa-spinner"></i> Pendings</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-success btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addUsertModal"><i class="fa fa-check"></i> Approved Bonafide</a>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	
	</section>
	<!----Section2 for showing Post Model ---->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="post">
		<div class="container">
			<h2>Requested Bonafides</h2>
			<div class="row">
			<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Roll no</th>
								<th>Type</th>
								<th>Department</th>
								<th>Reason</th>
								<!-- <th>hod</th> -->
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM applybonafide WHERE rollno='".$_SESSION['rollno']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['rollno']; ?></td>
							 		<td><?php echo $result['btype']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['applyreason']; ?></td>
							 		
							 			<?php 
							 			
							 	$cnt++;	}
							 		 	?>
							 		 	</td>

							 	</tr>

							 </tbody>
						</table>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
	
	<!-- Creating Modal -->
    <!-- Header Post -->
	<div class="modal fade" id="addPostModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style="width:50em">
				<div class="modal-header bg-primary text-white">
					<div class="modal-title">
						<h5>Apply Bonafide</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="form-control-label">Name</label>
							<input type="text" name="name" class="form-control"/>
							<input type="hidden" name="rollno" value="<?php echo $_SESSION['rollno']?>">
							<div class="form-group">
							<label class="form-control-label">Roll No</label>
							<input type="text" name="rollno" class="form-control" />
						</div>
							<br><label class="form-control-label">Type</label>
							<select name="btype" class="form-control" >
								<option value="BusPass">BusPass</option>
								<option value="Incometax">Incometax</option>
								<option value="Passport">Passport</option>
								<option value="Visa">Visa</option>
								<option value="Education Loan">Education Loan</option>
								<option value="Scholarships">Scholarships</option>
								<option value="Trainpass">Trainpass</option>
								<option value="Internship">Internship</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="form-control-label">Department</label>
							<input type="text" name="department" class="form-control" />
						</div>
						<div class="form-group">
							<label>Reason For Apply</label>
							<textarea name="editor1" class="form-control"></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" style="border-radius:0%;" data-dismiss="modal">Close</button>
					<input type="hidden" name="hod" value="0">
					<input type="submit" class="btn btn-success" style="border-radius:0%;" name="apply"  value="Apply">
				</div>
			</form>
			</div>
		</div>
	</div>
	<!--Modal Category-->
	<div class="modal fade" id="addCateModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style="width:50em">
				<div class="modal-header bg-warning text-white">
					<div class="modal-title">
						<h5>Pending Leaves</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Roll No</th>
								<th>Type</th>
								<th>Department</th>
								<th>Reason for Apply</th>
								<th>Staff</th>
								<th>HOD</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM applybonafide WHERE hod = 0 && rollno='".$_SESSION['rollno']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['rollno']; ?></td>
							 		<td><?php echo $result['btype']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['applyreason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['staff'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	
							 		 ?>
							 		</td>
							 		<td>
							 			<?php 
							 			if ($result['hod'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- User Modal -->
	<div class="modal fade" id="addUsertModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style="width:50em">
				<div class="modal-header bg-success text-white">
					<div class="modal-title">
						<h5>Approved Letters</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Name</th>
								<th>Roll No</th>
								<th>Type</th>
								<th>Department</th>
								<th>Reason for Apply</th>
								<th>Staff</th>
								<th>HOD</th>
								<th>Action</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM applybonafide WHERE hod = 1 AND rollno='".$_SESSION['rollno']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['rollno']; ?></td>
							 		<td><?php echo $result['btype']; ?></td>
							 		<td><?php echo $result['department']; ?></td>
							 		<td><?php echo $result['applyreason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['staff'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	
							 		 ?>
							 		</td>
							 		<td>
							 			<?php 
							 			if ($result['hod'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	
							 		 ?>
							 		</td>
							 		<td><?php 
							 			if ($result['hod'] == 0 && $result['staff'] == 0)  {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo $link = '<a href="letter.php">View</a>';
											
							 			}
							 	$cnt++;	}
							 		 ?>
							 			
							 	</td>
							 	</tr>

							 </tbody>
						</table>
				</div>
				
			</div>
		</div>
	</div>
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>
</body>
</html>
<?php 
	if (isset($_POST['apply'])){
		$name = $_POST['name'];
		$rollno = $_POST['rollno'];
		$btype = $_POST['btype'];
		$department = $_POST['department'];		
		$editor1 = $_POST['editor1'];
		$hod = $_POST['hod'];
		

		$sql = "INSERT INTO applybonafide(name,rollno,btype,department,applyreason,hod)VALUES('$name','$rollno','$btype','$department','$editor1','$hod')";

		$run = mysqli_query($con,$sql);

		if($run == true){
			
			echo "<script> 
					alert('Bonafide Requested, Please wait for approval hod');
					window.open('dashboard.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Apply');
			</script>";
		}
	}
	
 ?>