<?php
	session_start();
	require_once('classes/login.php');
	require_once('classes/database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Monjo | Mongo Management Tool</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="scripts/sweetalert.min.js" type="text/javascript"></script>
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Monjo
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="https://github.com/crusher95/monjo" target="_blank">
							<img src="images/icons/github.svg" width="20">
						</a></li>

					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<?php
						if(isset($_POST['submit'])){
								$hostname = $_POST['hostname'];
								$username = $_POST['username'];
								$passowrd = $_POST['password'];
								$port = $_POST['port'];

								$login = new Login($hostname,$username,$passowrd,$port);
								if($username!=""){
									$mongo = $login->authentication_connection();
								}else{
									$mongo = $login->establish_connection();
								}
								$database = new Database($mongo);

								if(sizeof($database->listDatabases())==0){
									alert('Error connecting to database');
								}
								echo "<script type='text/javascript'>window.location.href='index.php?hostname=$hostname'</script>";

						}
					?>
					<form class="form-vertical" method="post" action="">
						<div class="module-head">
							<h3>Connection Details</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name= "hostname" id="hostname" placeholder="Hostname" value="localhost">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name= "username" id="username" placeholder="Username" value="">
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name= "password" id="password" placeholder="Password" value="">
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="number" name= "port" id="port" placeholder="Port" value="27017">
									
								</div>
							</div>

							<div class="control-group">
								<div class="controls row-fluid">
									<input class="btn btn-md btn-danger pull-right" type="submit" name= "submit" id="submit" value="Connect">
									
								</div>
							</div>							
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2018 <a href='https://github.com/crusher95'>crusher95</a> </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>