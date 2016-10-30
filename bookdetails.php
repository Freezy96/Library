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
				<table>
					<tr>
						<th><h3>Author</h3></th>
						<td></td>
					</tr>
					<tr>
						<th><h3>Publisher</h3></th>
						<td></td>
					</tr>
					<tr>
						<th><h3>Call Number</h3></th>
						<td></td>
					</tr>
					<tr>
						<th><h3>ISBN</h3></th>
						<td></td>
					</tr>
					<tr>
						<th><h3>Status</h3></th>
						<td></td>
					</tr>
				</table>
				<div class="text-right">
					<button class="btn btn-primary btn-md"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span> Loan</button>
					<button class="btn btn-success btn-md"><span class="glyphicon glyphicon-book"></span><span class="glyphicon glyphicon-arrow-right"></span> Return</button>
					<button class="btn btn-warning btn-md"><span class="glyphicon glyphicon-tag"></span> Reserve</button>
					<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span> Back</button>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>