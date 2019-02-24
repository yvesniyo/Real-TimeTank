<!DOCTYPE html>
<html>
<head>
	<title>iRwandaSystem Wellcome Page</title>
	
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>


	<div class="  w3-border-blue" style="max-width: 80%;padding: 50px;margin-left: 10%;">
		<h4>Yes, Wellcome now You are now able to login to your System Panel</h4>
		<form style="width: 50%;padding: 20px;" class="col-md-6 col-lg-6 col-sm-12 col-xs-12" action="login.php" method="POST">
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


</body>
</html>