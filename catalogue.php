<!DOCTYPE html>
<html>
<head>
	<title>Library Catalogue</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-1 col-xs-12 col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<?php include 'searchbar.php' ?>
		<div class="col-xs-12 col-md-3">
<?php include 'loginform.php'; 	?>
		</div>
		<div class="col-xs-12 col-md-9">
			<div class="col-md-6">
				<h3>New Books</h3>
				<a href="" class="pull-right btn btn-danger btn-xs">More <span class="glyphicon glyphicon-chevron-right"></span></a>
				<table class="table">
					<tr>
						<td class="col-xs-2">Title</td>
						<td class="col-xs-4"></td>
						<td rowspan="4">
							<div class="col-xs-6">
								<a href="#" class="thumbnail">
									<img src="" alt="Book Image">
								</a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="col-xs-2">Author</td>
						<td class="col-xs-4"></td>
					</tr>
					<tr>
						<td class="col-xs-2">Publisher</td>
						<td class="col-xs-4"></td>
					</tr>
					<tr>
						<td class="col-xs-2">Call Number</td>
						<td class="col-xs-4"></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<h3>Popular Books</h3>
				<a href="" class="pull-right btn btn-danger btn-xs">More <span class="glyphicon glyphicon-chevron-right"></span></a>
				<table class="table">
					<tr>
						<td class="col-xs-2">Title</td>
						<td class="col-xs-4"></td>
						<td rowspan="4">
							<div class="col-xs-6">
								<a href="#" class="thumbnail">
									<img src="" alt="Book Image">
								</a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="col-xs-2">Author</td>
						<td class="col-xs-4"></td>
					</tr>
					<tr>
						<td class="col-xs-2">Publisher</td>
						<td class="col-xs-4"></td>
					</tr>
					<tr>
						<td class="col-xs-2">Call Number</td>
						<td class="col-xs-4"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>