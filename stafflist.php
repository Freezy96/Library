<?php 
require_once('config.php');
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff List</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-0 col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
		<div class="col-md-3">
<?php include 'adminnav.php'; ?>
		</div>
		<div class="col-md-9">
			<h1>Staff List</h1>
			
			<table class="table table-hover">
				<tr>
					<th>Username</th>
					<th>Email</th>
				</tr>
				<?php while($row = $result->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<?php 
				} 
				$conn->close();
				?>
			</table>
			
		</div>
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>