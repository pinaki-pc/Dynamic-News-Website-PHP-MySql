<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-4 mx-auto">
				<div class="card">
					<div class="card-body">
						<h5 class="card-header text-center">Admin Login</h5>
						<form action="admin_login.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">User ID :</label>
							    <input type="text" class="form-control" name="user" aria-describedby="emailHelp">
							    <small id="emailHelp" class="form-text text-muted">Please enter your registered User id.</small>
						    </div>
						    <div class="form-group">
							    <label for="exampleInputEmail1">Password :</label>
							    <input type="password" class="form-control" name="aPassword" aria-describedby="emailHelp">
						    </div>

    						<button type="submit" name="login_btn" class="btn btn-primary btn-block">Login</button>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>							

<!-- js -->
<script type="text/javascript" src="style/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="style/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="style/bootstrap/js/popper.min.js"></script>
</body>
</html>

<?php
	//establishing connection
	include('db/config.php');

	if (isset($_POST['login_btn'])) {
		# start code...
		$email=$_POST['user'];
		$password=$_POST['aPassword'];

		$query=mysqli_query($con,"select * from admin_master_tbl where username= '$email' and password= '$password' ");
		
		if($query)
		{
			if(mysqli_num_rows($query)>0)
			{
				$sql=mysqli_query($con,"select * from admin_master_tbl where username='$email'");
					if ($row=mysqli_fetch_array($sql)) {
						# code...
						$_SESSION['email']=$row['name']." ".$row['surname'];
					}
					//$_SESSION['email']=$email;
				echo("<script> location.href = 'home.php'; </script>");
			}
			else
			{
				echo("<script> alert('Invalid credentials. Try again'); </script>");
			}
		}

	}
?>
