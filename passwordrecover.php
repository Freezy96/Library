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
				<h2>Password Reset</h2>
			</div>
			<div class="panel-body">
			<?php 
			function generateRandomString($length = 10) {
				    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				    $charactersLength = strlen($characters);
				    $randomString = '';
				    for ($i = 0; $i < $length; $i++) {
				        $randomString .= $characters[rand(0, $charactersLength - 1)];
				    }
				    return $randomString;
				}
			$code = generateRandomString();	
			$new = 'Hello,%20This%20is%20your%20verification%20code:%20'.$code.',%20if%20u%20did%20not%20use%20library%20system,%20please%20ignore%20this%20email';
				

			 ?>
				<h3>Type your E-mail here to get verification code</h3>
				<form class="form-inline" method="POST" action="recoverpassword.php">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					<a href="mailto:stenlleycold@yahoo.com?body=<?php echo $new ?>" class="btn btn-md btn-primary">Sent</a>
				</form>
				<p class="help-block">If no email was received, click <a href="#">here</a>.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>