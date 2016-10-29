<!DOCTYPE html>
<html>
<head>
	<title>Recover Password</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2>Password Recovery</h2>
			</div>
			<div class="panel-body">
				<h3>Type your E-mail here to recover</h3>
				<form class="form-inline" method="POST" action="recoverpassword.php">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<button class="btn btn-md btn-primary">Recover</button>
				</form>
				<p class="help-block">If no email was received, click <a href="#">here</a>.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>