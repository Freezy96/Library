<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
<?php 
 include 'head.php'; 
 ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<?php include 'searchbar.php'; ?>

<?php
require_once('config.php');
$isbn = $_GET['id'];
$sql = "SELECT * FROM books WHERE isbn='$isbn'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
<form action="update.php" method="POST">
		<div class="container well">
			<div class="col-md-8">
				<table class="table">
					<tr>
						<th><h4>ISBN:  </h4></th>
						<td><h4><input name="isbn" type="text" required="required" placeholder="<?php echo $row['isbn'] ?>"></input></h4></td>
					</tr>
					<tr>
						<th><h4>Title:  </h4></th>
						<td><h4><input name="title" type="text" required="required" placeholder="<?php echo $row['title'] ?>"></input></h4></td>
					</tr>
					<tr>
						<th><h4>Author:  </h4></th>
						<td><h4><input name="author" type="text" required="required" placeholder="<?php echo $row['author'] ?>"></input></h4></td>
					</tr>
					<tr>
						<th><h4>Publisher:  </h4></th>
						<td><h4><input name="publisher" type="text" required="required" placeholder="<?php echo $row['publisher'] ?>"></input></h4></td>
					</tr>
					<tr>
						<th><h4>Description:  </h4></th>
						<td><h4><textarea name="description" rows="5" cols="50" required="required" placeholder="<?php echo $row['description'] ?>"></textarea></h4></td>
					</tr>
					<input type="hidden" name="hidden" value="<?php echo $isbn ?>">
				</table>
				<div class="text-right">
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-md" id="update" name="update" value="<?php echo $id ?>"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span><span class="hidden-xs"> Update</span></button>
						
						<!-- <button class="btn btn-warning btn-md" id="reserve" name="reserve" value="<?php echo $row['isbn']; ?>"><span class="glyphicon glyphicon-tag"></span><span class="hidden-xs"> Reserve</span></button> -->
					
						<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Back</span></button>
					</div>
				</div>
			</div>
		</div>
</form>	
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>