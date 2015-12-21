<?php

session_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once($_SERVER['DOCUMENT_ROOT'] . "/res/mysql_connect.php");


?>
<html>
	<head>
		<title>Project</title>
		<?php include($_SERVER['DOCUMENT_ROOT'] . "/res/meta.php"); ?>
	</head>
	<body>
		<div id="wrapper" style="margin-top: -120px;">
			<?php include("res/header.php"); ?>

			<div class="container" id="content">
				<div class="col-md-8">

					<h1>Register on Northcode<br><small>Includes all Northcode services like Cobaltvault etc.</small></h1>

					<form class="form-horizontal" role="form" action="/scr/register.php" method="post" id="reg-form">
						<div class="form-group">
							<label for="register-username" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" id="register-username" placeholder="Enter username">
								<p class="help-block">Only use alphanumeric Characters [Aa-Zz0-9] <strong><span id="username-addtext"></span></strong></p>
							</div>
						</div>
						<div class="form-group">
							<label for="register-email" class="col-sm-2 control-label">Email address</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" id="register-email" data-check="true" placeholder="Enter email">
								<p class="help-block">Enter a valid email address, it will be used for confirming your account</p>
							</div>
						</div>
						<div class="form-group">
							<label for="register-password" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="register-password" name="password" data-check="true" placeholder="Password">
								<p class="help-block">Enter a password with at least 8 characters</p>
							</div>
						</div>
						<div class="form-group">
							<label for="register-password-check" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="register-password-check" name="password-check" data-check="true" placeholder="Password" equal="password">
								<p class="help-block">Please re-enter your password for confirmation</p>
							</div>
						</div>
						<button type="submit" id="reg-form-submit" class="btn btn-primary">Register</button>
					</form>

					<?php 
				if(isset($_SESSION['reg_error'])) {
				 ?>
				 <div class="alert alert-danger" role="alert">
				 <strong>Error!</strong> <?php echo $_SESSION['reg_error']; ?>
				 </div>
				 <?php 
				 unset($_SESSION['reg_error']);
				}
				  ?>
				</div>



				<div class="col-md-4">
				<h2>Terms and Conditions</h2>
				<p>Neither your username, email or password will be given to any 3rd party. The password will be hashed and unviewable by anyone so it's stored securely.</p>
				<p>We may send you an email infrequently (perhaps once a year) to update you about Northcode and it's services. If we would start out to send more frequent newletters we will have an opt-out option.</p>
				<p>Solely your username will be viewable for other users on the site, any other information is kept private unless chosen not to do so.</p>
				</div>
			</div>
			
			<?php include("res/footer.php"); ?>
			<script type="text/javascript" src="js/register.js"></script>
		</div>
	</body>
</html>
