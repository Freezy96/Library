<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading"><span class="glyphicon glyphicon-log-in"></span> Login</div>
		<div class="panel-body">
			<form class="form-horizontal" method="POST" action="login.php">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input class="form-control" type="text" name="username" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
						<input type="password" name="password" placeholder="Password" class="form-control">
					</div>
				</div>
			  <?php if (isset($_SESSION['flash'])) { ?>

			  <p class="danger">
			  <?php echo $_SESSION['flash']; ?>
			  </p>

			  <?php unset($_SESSION['flash']) ?>
			  <?php } ?>
				<div class="text-right">
					<button type="submit" class="btn btn-primary btn-md">Login</button>
				</div>

			</form>
		</div>
		<div class="panel-footer">
			<a href="registerpage.php">Not registered yet? Register now.</a>
		</div>
	</div>
</div>
	