<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
<?php include'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-0 col-xs-12 col-md-offset-1 col-md-10">
<?php include'header.php'; ?>
		<div class="col-md-3">
<?php include'nav.php'; ?>
		</div>
		<div class="col-md-9">
<?php include'news.php'; ?>
		</div>
	</div>
</div>
</body>
</html>