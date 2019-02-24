<?php

require 'db/conn.php';
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['Userid']) && isset($_SESSION['email'])){
	header("location:index.php");
}
if(isset($_POST['register'])  && $_SERVER["REQUEST_METHOD"] == "POST"){

	function vali($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


	$name=vali($_POST['fname']);
	$email=vali($_POST['email']);
	$username=vali($_POST['username']);
	$password=vali($_POST['password']);

	if(empty($name) || empty($email) || empty($username) || empty($username) || empty($password)){
		echo "<script>alert('There(s) empty field.');</script>";
	}else{
		
		$password=md5($password);
		$dateReg=mktime();

		$stmt = $conn->query("INSERT INTO users (fullname, email, username, password,dateReg) VALUES ('$name', '$email', '$username', '$password', '$dateReg')");

		if($stmt){
			echo "<script>alert('User Successfully Registerd.');document.location.href='wellcome.php'</script>";
		}
	}
}

if(isset($_POST['login'])  && $_SERVER["REQUEST_METHOD"] == "POST"){
	function vali($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$email=vali($_POST['email']);
	$password=vali($_POST['password']);
	if(empty($password) || empty($email)){
		echo "<script>alert('There(s) empty field.Username/e-mail or Password');</script>";
	}else{
		$password=md5($password);

		$check=$conn->query("SELECT * from users where username='$email' or email='$email' and password='$password' ");

		if($check){

			if($check->num_rows>0){
				$det=$check->fetch_assoc();
				$_SESSION['username']=$det['username'];
				$_SESSION['email']=$det['email'];
				$_SESSION['Userid']=$det['id'];
				$_SESSION['name']=$det['fullname'];
				header("location:index.php");
			}else{
				echo "<script>alert('Sorry no correct user for this Username/e-mail or Password');</script>";
			}
		}
	}


}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>iRwandaSystem Registration & Login</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body{
			background-color: rgb(230,230,230,0.4);
		}
		ul.activities{
			padding-left: 20px;
			margin-top: 20px;
		}
		ul.activities li{
			list-style: none;

		}
		ul.activities li{
			margin-bottom: 20px;
		}
		ul.activities li a{
			font-size: 12px;
		}
		#foot a{
			color: rgb(200,200,200);
		}
	</style>
</head>
<body>


	<div style="min-height: 550px;margin-top: 20px;padding: 0 !important;border:1px solid rgb(230,230,230)" class="w3-row  w3-white col-md-6 col-lg-6 col-sm-12 col-lg-12 col-md-offset-3 col-lg-offset-3 ">
		<div class="container  w3-blue col-md-12 col-lg-12 col-sm-12 col-xs-12" style="min-height: 60px;padding-top: 2px;">
			<img src="images/logo.jpg" style="height: 50px;width: 50px;border-radius: 50%;"> <span>iRwandaSystem </span>
			<p style="float: right;margin-top: 10px;">Made In Rwanda Technology System, Made for Rwandans,<br>easy life,best monitoring system   combined all in  One.</p>
		</div>

		<div class="col-md-12 col-lg-12 col-sm-12 col-lg-12 w3-border-right" style="min-height: 550px;padding: 0 !important">
			<div style="background: black;height: 40px;width: 100%;color: white;padding-top: 10px;padding-left: 15px;">
				<span>Registration & Login Panel</span>
			</div>
			<div>
				<!-- Registration -->
				<form style="width: 50%;padding: 20px;" class="col-md-6 col-lg-6 col-sm-12 col-xs-12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<fieldset>
						<legend style="font-size: 12px;">Registration (I  don't have Account)</legend>
						<p>
							<label>Full Name</label>
							<input type="text" name="fname" class="form-control">
						</p>
						<p>
							<label>E-mail</label>
							<input type="text" name="email" class="form-control">
						</p>
						<p>
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</p>
						<p>
							<label>Comfirm Password</label>
							<input type="password" name="password" class="form-control">
						</p>
						<p>
							
							<input type="submit" name="register" class="btn w3-blue" value="Register">
						</p>
					</fieldset>
				</form>
				<!-- Login -->
				<form style="width: 50%;padding: 20px;" class="col-md-6 col-lg-6 col-sm-12 col-xs-12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<fieldset>
						<legend style="font-size: 12px;">Login (I have Account)</legend>
						<p>
							<label>Username/E-mail</label>
							<input type="text" name="email" class="form-control">
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</p>
						<p>
							<span><a href="forget.html">Forget Password</a></span><br />
							<br />
							<input type="submit" name="login" class="btn w3-blue" value="Login">
						</p>
					</fieldset>
				</form>
			</div>

			
			
		</div>
		
		
	</div>
	<div style="min-height: 150px;margin-top: 20px;color:;padding-top: 20px; " class="w3-row w3-center  col-md-8 col-lg-8 col-sm-12 col-lg-12 col-md-offset-2 col-lg-offset-2 ">

			<p style="color: rgba(200,200,200);" id="foot"><a href="#">Privacy</a> | <a href="#">Terms</a> | <a href="#">Copyright</a> | <a href="#">About</a> | <a href="#">Contact</a></p>

			<p style="color: rgba(200,200,200);" id="foot">&copy; Rwanda - <a href="http://gtech.dx.am">Innovator</a></p>

	</div>



</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>