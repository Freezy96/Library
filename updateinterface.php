<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
<?php include 'head.php'; ?>
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
			<div class="col-md-4">
				<img height="499" width="328" src="<?php echo $row['image']; ?>" alt="Book Image"><br><br>
				<form class="form-inline" action="upload.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $_SESSION['isbn']; ?>" name="isbn">
					<div class="form-group">
						<input type="file" name="avatars" id="file"/>
					</div>
					<button class="btn btn-primary btn-sm" type="submit" value="Submit"><i class="fa fa-file-image-o"></i> Submit</button>
				</form>
			</div>
			<div class="col-md-8">
				<h2>Update Book Details</h2>
				<table class="table">
					<tr>
						<th><h4>ISBN</h4></th>
						<td><h4><input name="isbn" class="form-control" type="text" required value="<?php echo $row['isbn'] ?>"></h4></td>
					</tr>
					<tr>
						<th><h4>Title</h4></th>
						<td><h4><input name="title" class="form-control" type="text" required value="<?php echo $row['title'] ?>"></h4></td>
					</tr>
					<tr>
						<th><h4>Author</h4></th>
						<td><h4><input name="author" class="form-control" type="text" required value="<?php echo $row['author'] ?>"></h4></td>
					</tr>
					<tr>
						<th><h4>Publisher</h4></th>
						<td><h4><input name="publisher" class="form-control" type="text" required value="<?php echo $row['publisher'] ?>"></h4></td>
					</tr>
					<tr>
						<th><h4>Description</h4></th>
						<td><h4><textarea name="description" class="form-control" rows="5" required><?php echo $row['description'] ?></textarea></h4></td>
					</tr>
					<input type="hidden" name="hidden" value="<?php echo $isbn ?>">
				</table>
				<div class="text-right">
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-md" id="update" name="update" value="<?php echo $id ?>"><span class="glyphicon glyphicon-save"></span><span class="hidden-xs"> Update</span></button>
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