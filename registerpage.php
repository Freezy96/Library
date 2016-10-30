<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-1 col-xs-12 col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
		<div class="panel panel-primary">
			<div class="panel-heading">Register</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="register.php">
					<div class="form-group">
						<label class="control-label col-md-2">Username</label>
						<div class="col-md-10">
							<input type="text" name="username" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Password</label>
						<div class="col-md-10">
							<input type="password" name="password" id="password1" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Confirm Password</label>
						<div class="col-md-10">
							<input type="password" id="password2" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Email</label>
						<div class="col-md-10">
							<input type="email" name="email" class="form-control">
						</div>
					</div>
					<button class="pull-right btn btn-primary btn-md" type="submit">Register</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>