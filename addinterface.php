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
?>
		<div class="container well">
			<form class="form-horizontal" method="POST" action="insert.php" enctype="multipart/form-data">
			<div class="col-md-4">
				<img height="499" width="328" alt="Book Image"><br><br>
					<input type="hidden" value="<?php echo $_SESSION['isbn']; ?>" name="isbn">
					<div class="form-group">
						<input type="file" name="avatars" id="file"/>
					</div>
			</div>
			<div class="col-md-8">
				<h2>Add New Book</h2>
				<div class="form-group">
					<label class="col-xs-2 control-label">ISBN</label>
					<div class="col-xs-10">
						<input name="isbn" class="form-control" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label">Title</label>
					<div class="col-xs-10">
						<input name="title" class="form-control" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label">Author</label>
					<div class="col-xs-10">
						<input name="author" class="form-control" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label">Publisher</label>
					<div class="col-xs-10">
						<input name="publisher" class="form-control" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label">Description</label>
					<div class="col-xs-10">
						<textarea class="form-control" name="description" class="form-control" rows="5" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label">Subject</label>
					<div class="col-xs-10">
						<select class="form-control" name="subject">
							<option value="1">Internet</option>
							<option value="2">Self-Help</option>
							<option value="3">Fiction</option>
							<option value="4">Gardening</option>
						</select>
					</div>
				</div>
				<div class="text-right">
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-md" id="add" name="add"><span class="glyphicon glyphicon-plus"></span><span class="hidden-xs"> Add</span></button>
						<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Cancel</span></button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>