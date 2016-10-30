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
		<div class="container well">
			<div class="col-md-4">
				<img src="0307277291.jpg" alt="Book Image">
			</div>
			<div class="col-md-8">
				<h2 role="book-title">Self-Help</h2>
				<table class="table">
					<tr>
						<th><h4>Author</h4></th>
						<td><h4>Lorrie Moore</h4></td>
					</tr>
					<tr>
						<th><h4>Publisher</h4></th>
						<td><h4>Vintage</h4></td>
					</tr>
					<tr>
						<th><h4>Call Number</h4></th>
						<td><h4></h4></td>
					</tr>
					<tr>
						<th><h4>ISBN</h4></th>
						<td><h4>0307277291</h4></td>
					</tr>
					<tr>
						<th><h4>Status</h4></th>
						<td><h4>Available</h4></td>
					</tr>
				</table>
				<div class="text-right">
					<div class="btn-group">
						<button class="btn btn-primary btn-md"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span><span class="hidden-xs"> Loan</span></button>
						<button class="btn btn-success btn-md"><span class="glyphicon glyphicon-book"></span><span class="glyphicon glyphicon-arrow-right"></span><span class="hidden-xs"> Return</span></button>
						<button class="btn btn-warning btn-md"><span class="glyphicon glyphicon-tag"></span><span class="hidden-xs"> Reserve</span></button>
						<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Back</span></button>
					</div>
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>