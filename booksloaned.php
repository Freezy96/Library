<?php 
require_once('config.php');
$sql = "SELECT * FROM books WHERE loan!=0";
$result = $conn->query($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Books Loaned</title>
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
			<h1>Books Loaned</h1>
			<table class="table table-hover">
				<tr>
					<th>Book Image</th>
					<th>Book Title</th>
					<th>Loaned by</th>
				</tr>
				<?php while($row = $result->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['image']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['loan']; ?></td>
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