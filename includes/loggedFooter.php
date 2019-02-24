</div>
		<div class="" style="min-height: 611px;width:20%;float: right;position: relative;background-color: black;">
			<h4 class="w3-center w3-text-orange">Main Activities</h4>
			<ul class="activities">
				<li><a href="index.php" class="w3-text-white">Tank level Monitoring</a></li>
				<li><a href="setting.php" class="w3-text-white">Settings</a></li>
			</ul>

			<p class="w3-center w3-text-orange" style="margin-top: 300px;">Account of: <br>
				<?php echo $_SESSION['name'] ?>
			</p>

			<a href="logout.php" class="w3-btn w3-blue" style="position: absolute;bottom: 50px;right: 30%;">Logout</a>
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